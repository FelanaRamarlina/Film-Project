<?php
//require('./index.php');
?>
<?php 
if(isset($_GET['delete'])){
    $panier->del($_GET['delete']);
}
?> 

<h1>PANIER</h1>  

<div class="table">
    <div class="wrap">
        
        <div class="rowtitle">
            <span class="nom">Nom du film : </span>
            <span class="Prix">Prix : </span>
            <span class="Quantité">Quantité : </span>
        </div>
        <?php 
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $produits = array();
        }else{
            $produits = $db->query('SELECT * FROM produit WHERE id_produit IN ('.implode(',',$ids).')');
        }
        foreach($produits as $produit):
        ?>
        <div class="row">
            <a href="" class="img"><img src="img/<?= $produit['id_produit'];?>.jpg"></a>
            <span class="nom"><?= $produit['libelle']; ?></span>
            <span class="Prix"><?= number_format($produit->prix,2,',',' ');?> </span>
            <span class="Quantité">1  </span>
            <span class="action">
            
                <a href="panier.php?delete=<?=$produit['id_produit']; ?>" class="del"><img src="../images/corbeille.png"> </a>
                
            </span>
        </div>
        <?php endforeach; ?>
    </div>
</div>