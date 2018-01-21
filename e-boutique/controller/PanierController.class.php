<?php
require('./model/User.class.php');
require_once('./model/UserManager.class.php');
class panierController {
  private $userManager;
  private $user;

  public function __construct($db1){
    $this->userManager = new UserManager($db1);
    $this->user = new User;
    $this->db = $db1 ;

    }

    public function addPanier(){
      //sécurité de Connexion
      if(empty($_SESSION['user'])){
        $page = "films";
        $info = "<h1>Vous devez vous connecter pour commander des films</h1>";
      }else {
        //ajout dans le panier...
        $page = "films";
      }
      require('./views/index.php');
    }
    
    public function add($id_produit)
    {
        $_SESSION['panier'][$id_produit] = 1;
    }

    public function delete($id_produit){
        unset($_SESSION['panier'][$id_produit] = 1);
        
    }

}
