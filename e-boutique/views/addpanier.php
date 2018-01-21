<?php 
require 'index.php';
require './model/Connexion.class.php';

if(isset($_GET['id_produit'])){
    $product = $db->query('SELECT id_produit FROM produit WHERE id_produit=:id_produit', array('id' => $_GET['id']));
}else{
    die("Vous n'avez pas séléctionné de produit à ajouter dans votre panier");
}
?>