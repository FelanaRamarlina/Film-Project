<?php
session_start();
if(!empty($_SESSION['user']))
  $connexion = "Connexion";
else{
  $connexion = "Deconnexion";
}

ini_set("display_errors", "1");
require_once('model/Connexion.class.php');
$pdoBuilder = new Connexion();
$db = $pdoBuilder->getConnexion();

if (( isset($_GET['ctrl']) && !empty($_GET['ctrl']) ) && ( isset($_GET['action']) && !empty($_GET['action']) )) {
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];

    if($connexion == "Deconnexion"){
      session_destroy();
    }
}
else {
    $ctrl = 'User';
    $action = 'default';
}

require_once('controller/' . $ctrl  . 'Controller.class.php');

$ctrl = $ctrl . 'Controller';
$controller = new $ctrl($db);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>E-boutique</title>
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./ressources/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    </head>
    <body>
      <div class="header container-fluid no-padding">
          <div class="col-md-12">
            <div class="nav">
              <a href="#">Mon panier (0) |</a>
              <a href="index.php?ctrl=user&action=login"><?php echo $connexion ?> |</a>
              <a href="index.php?ctrl=user&action=inscription">Inscription</a>
            </div>
          </div>
          <div class="col-md-12"><h1><a href="index.php">RS films</a></h1><img src="./ressources/img/video-camera.png"/></div>
      </div>

			<div class="content">
			<?php
				$controller->$action();
			?>
			</div>
    </body>
</html>
