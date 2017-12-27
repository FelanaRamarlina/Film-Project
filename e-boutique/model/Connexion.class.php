<?php
class Connexion {

	private $user = "root";
	private $pass = "root";

	public function getConnexion() {
			try {
					$db = new PDO('mysql:host=localhost;dbname=eboutique;charset=utf8', $this->user, $this->pass);
			} catch (Exception $e) {
					die("Erreur de connexion SQL");
			}
			return $db;
	}


}
