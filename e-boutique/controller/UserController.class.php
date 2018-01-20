<?php
require('./model/User.class.php');
require_once('./model/UserManager.class.php');
class userController {

    private $userManager;
	  private $user;

    public function __construct($db1) {
       $this->userManager = new UserManager($db1);
       $this->user = new User;
       $this->db = $db1 ;
    }

    public function login() {
        $page = 'login';
        require('./views/index.php');
    }

    public function monEspace(){
      $page ='monEspace';
      require('./views/index.php');
    }

    public function monpanier(){
      $page ='panier';
      require('./views/index.php');
    }

    public function historique(){
      $page ='historique';
      require('./views/index.php');
    }

    public function infosPersos(){
      $page ='infosPersos';
      require('./views/index.php');
    }

    public function inscription() {
      $page = 'inscription';
      require('./views/index.php');
    }

    public function films() {
      $page = 'films';
      require('./views/index.php');
    }

    public function series() {
      $page = 'series';
      require('./views/index.php');
    }

    public function commande() {
      $page = 'commande';
      require('./views/index.php');
    }

    public function doLogin() {
      if(!empty($_SESSION['user'])){
        $page = "default";
      }else{
        $this->user = new User();
        $dologinQuery = "SELECT email, password,admin FROM users WHERE email = :email and password = :password;";
    		$req = $this->db->prepare($dologinQuery);
    		$ex = $req->execute(array(
    				"email" => $_POST['email'],
    				"password" => md5($_POST['password'])
    		));

        while ($donnees = $req->fetch())
        {
            $login = $donnees['email'];
            $password = $donnees['password'];
            $admin = $donnees['admin'];
        }


        if (!empty($login) && !empty($password)) {
      		$info = "Connexion reussie";
      		$_SESSION['user'] = $login;
          if($admin==1){
            $page = "admin";
          }else{
            $page = 'default';
          }
        }else {
        	$info = "Identifiants incorrects.";
    			$page = "login";
        }
      }
      require('./views/index.php');
    }

    public function doCreate(){
      if(empty($_POST['email'])||empty($_POST['password'])||empty($_POST['nom'])||empty($_POST['prenom'])||empty($_POST['address'])||empty($_POST['cp'])||empty($_POST['ville'])) {
  			$page = "inscription";
  			$info = "Veuillez remplir tous les champs";
  			require("views/index.php");
  			exit();
  		}else{
    		$doCreateQuery = "INSERT INTO users VALUES(
    			'',
    			:email,
    			:password,
    			:firstName,
    			:lastName,
    			:address,
    			:postalCode,
    			:city,
    			:admin
    		)";
    		$req = $this->db->prepare($doCreateQuery);
    		$req->execute(array(
    			"email" => $_POST['email'],
    			"password" => md5($_POST['password']),
    			"firstName" => $_POST['nom'],
    			"lastName" => $_POST['prenom'],
    			"address" => $_POST['address'],
    			"postalCode" => $_POST['cp'],
    			"city" => $_POST['ville'],
    			"admin" => 0
    		));

    		$page = "default";
    		$msg = "Utilisateur Crée";
        $_SESSION['user'] = $_POST['email'];
      }
  		require('./views/index.php');
    }

    public function doUpdate(){
      if(empty($_POST['email'])||empty($_POST['password'])||empty($_POST['address'])||empty($_POST['postalCode'])||empty($_POST['city'])) {
  			$page = "infosPersos";
  			$info = "Veuillez remplir tous les champs";
  			exit();
  		}else{
        /*On vérifie si l'adresse n'existe pas déjà*/
        $dologinQuery = "SELECT email FROM users WHERE email = :email";
    		$req = $this->db->prepare($dologinQuery);
    		$ex = $req->execute(array(
    				"email" => $_POST['email'],
    		));
        while ($donnees = $req->fetch())
        {
            $email = $donnees['email'];
        }
        if(!empty($email) && $email != $_POST['email'] ){
          $info = "L'adresse email insérée existe déjà.";
        }else{
          /*On prépare la modification*/
          $modification =
          "UPDATE USERS SET
            email='".$_POST['email']."',
            password='".$_POST['password']."',
            postalCode='".$_POST['postalCode']."',
            city='".$_POST['city']."'
          WHERE email='".$_SESSION["user"]."'
          ";
          $query = $this->db->query($modification);
          if($query) {
            $info = "Vos modifications ont bien été enregistrées.";
          }else{
            $info = "erreur sql";
            var_dump($ex);
          }
        }
      }
      $page = 'infosPersos';
      require('./views/index.php');
    }

    public function deconnexion(){
      session_destroy();
      $page = 'default';
      require('./views/index.php');
    }

    public function default() {
  		$page = "default";
  		require('./views/index.php');
	  }


  }
?>
