<?php 
require 'index.php';
require './model/Connexion.class.php';

if(isset($_GET['id_produit'])){
    $produit = $db->query('SELECT id_produit FROM produit WHERE id_produit=:id_produit', array('id' => $_GET['id']));
    $if(empty($produit)){
        die("Ce produit n'éxiste pas.");
    }
    $panier->add($produit[0]->id_produit);
    die("Le produit a bien été rajouté au panier, <a href="javascript:history.back()"retourner sur le catalogue </a>")
}else{
    die("Vous n'avez pas séléctionné de produit à ajouter dans votre panier");
}
?>