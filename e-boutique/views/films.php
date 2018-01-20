<?php
require_once('./model/UserManager.class.php');
$film = "SELECT * FROM produit";
$req = $this->db->prepare($film);
$req->execute();

$result = $req->fetchAll();
print_r($result);
foreach ($result as $films)
{
    $nomsfilms = $films['libelle'];
    
}
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
        
    <div class="col-xs-12 col-md-12 cinqphotos">
        <div class="col-xs-12 col-md-2">
            <img src="./images/insidious.jpg" alt="Insidious" style="width:93%;">
            <?php echo $nomsfilms; ?>
            <a href="index.php?ctrl=user&action=commande" class="btn btn-success" role="button">Ajouter au panier</a>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/getout.jpg" alt="getout" style="width:93%;">
            <p> Get Out 2016 - Full HD  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/%C3%A7a.jpg" alt="ca" style="width:90%;">
            <p> ça (film) 2017 - Full HD 12€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/girls.jpg" alt="girls" style="width:95%;">
            <p> Girls Trip 2016 - 720p  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/kiss.jpg" alt="kiss&cry" style="width:95%;">
            <p> Kiss & Cry 2015 - HD  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>  
        
        <div class="col-xs-12 col-md-2">    
            <img src="./images/kingsman.jpg" alt="kingsman" style="width:95%;">
            <p> Kingsman 2017 - 720p  15€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>          
    </div>
        <br/>
        
    <div class="col-xs-12 col-md-12 dixphotos">
        <div class="col-xs-12 col-md-2">
            <img src="./images/alice.jpg" alt="Alice" style="width:93%;">
            <p> Alice APM 2017 - 720p  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>
        <div class="col-xs-12 col-md-2">
            <img src="./images/revenant.jpg" alt="Revenant" style="width:85%;">
            <p> The Revenant - 1080p  15€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/baby.jpg" alt="baby" style="width:93%;">
            <p> Baby Driver 2017 - HD 12€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/valerian.jpg" alt="valerian" style="width:87%;">
            <p> Valerian 2017 - 720p  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>    
        <div class="col-xs-12 col-md-2">    
            <img src="./images/alibi.jpg" alt="Alibi" style="width:95%;">
            <p> Alibi.com 2017 - HD - 12€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>  
        <div class="col-xs-12 col-md-2">    
            <img src="./images/demolition.jpg" alt="Demolition" style="width:95%;">
            <p> Demolition 2016 - 720p  10€</p>
            <button type="button" class="btn btn-success">Ajouter au panier</button>
        </div>  
    </div>    
        
    </div>
</div>    
