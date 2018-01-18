<?php 
include("./model/Connexion.class.php");

$pseudo = $_GET['email'];
$pass = $_GET['password'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM users WHERE email = :pseudo AND password = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
	$nbLignes=count($_SESSION['panier']);
            if ($nbLignes>0)
            {
					$req = $bdd->prepare('INSERT INTO panier(id_user, id_prdouit) VALUES(:id, :id_pdt)');
					$req->execute(array(
						'id' => $_GET["id_user"],
						'id_pdt' => $_GET["id_produit"]));
				$produits = $bdd->query('SELECT * FROM produit WHERE id_produit IN(' . implode(', ', array_map(array($bdd, 'quote'), array_keys($_SESSION['panier']))) . ')', PDO::FETCH_ASSOC);
                echo "Votre commande a bien été enregistrée  ";
                $_SESSION["panier"]=array();
            }
            else
            {
                echo "Commande non enregistrée, aucun produit commandé<br>";
            }
}
?>