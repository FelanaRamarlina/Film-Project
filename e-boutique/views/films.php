<?php
require_once('./model/UserManager.class.php');
$films = "SELECT * FROM produit";
$query = $this->db->query($films);
/*while ($donnees = $query->fetch())
{
  $libelle = $donnees['libelle'];
  $photo = $donnees['photo'];
  $prix = $donnees['prix'];

}*/

?>
<div class="container-fluid">
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rechercher </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php?ctrl=user&action=films">Films <span class="sr-only"></span></a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Valider</button>
          </form>
        </div><!-- navbar-collapse -->
            </div><!-- container-fluid -->
        </nav>
    <?php
        if(isset($info)) { echo $info;}
    ?>
    <div class="row">
      <?php while ($donnees = $query->fetch()){ ?>
        <div class="film col-md-3">
          <div class="col-md-12"><img class="photo" src="./images/<?php echo $donnees['photos'];?>" style="width:220px;height:310px;"></div>
          <div class="col-md-12"><center><p><?php echo $donnees['libelle'],' - ', $donnees['prix'],'€';?></p></center></div>
          <div class="col-md-12"><center><a href="index.php?ctrl=panier&action=addPanier&?id=<?=$donnees['id_produit'];?>" class="btn btn-success" role="button">Ajouter au panier</a></center></div>

        </div>
      <?php }?>
    </div>
