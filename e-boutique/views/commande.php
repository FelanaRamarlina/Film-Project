<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" /> <!-- On insère le css -->
    </head>

<?php
include("./controller/Connexion.class.php");
//session_start();

$total = 0;

echo '<h1>Récapitulatif des articles ajoutés</h1>';

if ($_SESSION['panier']) {
    $produits = $bdd->query('SELECT * FROM produit WHERE id_produit IN(' . implode(', ', array_map(array($bdd, 'quote'), array_keys($_SESSION['panier']))) . ')', PDO::FETCH_ASSOC);
	echo '<table>
				<tr>
                    <th>Désignation</th>
                    <th>Prix </th>
					<th>Quantité</th>
					<th>Montant</th>
                </tr>';
    foreach ($produits as $p) {
        echo '
                <tr>
                    <td>', htmlspecialchars($p['id_produit']),'</td>
                    <td>', htmlspecialchars($p['libelle']),'</td>
                    <td>',$p['prix'],' €</td>
					<td>',$_SESSION['panier'][$p['id_produit']]['qte'],'</td>
					<td>',$_SESSION['panier'][$p['id_produit']]['qte']*$p['pdt_prix'],' €</td>
                </tr>';
        $total = $total + $_SESSION['panier'][$p['pdt_ref']]['qte']*$p['prix'];
    }
	echo 		'<tr>
					<td></td>
                    <td></td>
                    <td></td>
					<td>Total :</td>
                    <td>',$total,' €</td>
				</tr>	
		</table>';
} else {
    echo 'Votre panier est vide';
}

?>
&nbsp&nbsp&nbsp
<form action="envoyer.php" method="get">
Identifiant : <input type="text" name="codeClient" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>">&nbsp;&nbsp;&nbsp;
Mot de passe : <input type="password" name="motPasse" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"><br /><br />
<input type="submit" name="connexion" value="Envoyer la commande">
</form>
</html>