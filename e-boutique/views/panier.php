<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../ressources/style.css" /> <!-- On insère le css -->
        <title> Panier </title>
    </head>
<?php 
    
if (! isset($_SESSION['panier'])) $_SESSION['panier'] = array();

$id_produit = isset($_GET['id_produit']) ? $_GET['id_produit'] : null;
$quantite = isset($_GET['quantite']) ? $_GET['quantite'] : 1;

if ($id_produit == null) echo 'Veuillez sélectionner un article pour le mettre dans le panier!';
else
if (isset($_GET['ajouter'])){ 
$_SESSION['panier'][$id_produit]['qte'] = $quantite;
} ;
if (isset($_GET['supprimer'])) unset($_SESSION['panier']);

echo '<h1>Contenu de votre panier</h1><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
echo '<table>
		<tr>
			<th>Référence</th>
			<th>Quantité</th>
		</tr>';
foreach($_SESSION['panier'] as $id_produit=>$article_acheté){
if (isset($article_acheté['qte'])){
echo '	<tr>
			<td>', $id_produit ,'</td>
			<td>', $article_acheté['qte'] , '</td>
		</tr>';
}
}
echo '</table>';
}
else { echo 'Votre panier est vide'; }
echo "</ul>";
?>
<a href="javascript:history.back()">Retourner sur le catalogue</a>
</html>