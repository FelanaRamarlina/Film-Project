<?php 
require_once('./model/UserManager.class.php');

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
    echo 'Mauvais email ou mot de passe !';
}
else
{
    //session_start();
	$nbLignes=count($_SESSION['panier']);
            if ($nbLignes>0)
            {
                $moment=time();
					$req = $bdd->prepare('INSERT INTO historique(date_achat, id_user, id_produit) VALUES(:date_achat, :id_user, :id_pdt)');
					$req->execute(array(
						'date_achat' => $moment,
						'id_user' => $_GET["id_user"],
                        'id_pdt' => $_GET["id_produit"]));
                
				$produits = $bdd->query('SELECT * FROM produit WHERE id_produit IN(' . implode(', ', array_map(array($bdd, 'quote'), array_keys($_SESSION['panier']))) . ')', PDO::FETCH_ASSOC);
                foreach ($produits as $p) {
					//$ref=htmlspecialchars($p['']);
                    $qte=$_SESSION['panier'][$p['id_produit']]['qte'];

					$req = $bdd->prepare('INSERT INTO panier(date_achat, id_client, id_produit, quantite) VALUES(:date_achat, :id_user, :produit, :quantite)');
					$req->execute(array(
						'date_achat' => $moment,
						'id_user' => $_GET["id_user"],
						'produit' => $ref,
						'quantite' => $qte));
                    
                }
                echo "Votre commande a bien été enregistrée";
                $_SESSION["panier"]=array();
            }
            else
            {
                echo "Commande non enregistrée, aucun produit commandé<br>";
            }
}
?>