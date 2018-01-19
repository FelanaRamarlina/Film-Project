<?php
require_once('./model/UserManager.class.php');

$historique = "SELECT email, address, postalCode, city FROM users  WHERE email='".$_SESSION["user"]."'";
$query = $this->db->query($historique);
$i = 1;
while ($donnees = $query->fetch())
{
  $email = $donnees['email'];
  $address = $donnees['address'];
  $postalcode = $donnees['postalCode'];
  $city = $donnees['city'];
}
?>
<div class="monEspace container">
  <div class="divTitle col-sm-12"><h1>Données personnelles</h1></div>
  <form action="index.php?ctrl=user&action=doUpdate">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group col-md-6">
        <label for="password">Nouveau mot de passe</label>
        <input type="password" class="form-control" id="password">
      </div>
      <div class="form-group col-md-6">
        <label for="email">Adresse</label>
        <input type="email" class="form-control" id="address" value="<?php echo $address;?>">
      </div>
      <div class="form-group col-md-6">
        <label for="postalCode">Code postal</label>
        <input type="text" class="form-control" id="postalCode" value="<?php echo $postalcode;?>">
      </div>
      <div class="form-group col-md-6">
        <label for="city">Ville</label>
        <input type="text" class="form-control" id="city" value="<?php echo $city;?>">
      </div>
    </div>
    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
  </div>
  </form>
</div>
