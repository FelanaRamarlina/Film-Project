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
  <?php if(isset($info)) { echo $info;} ?>
  <div class="wrapper">
    <div class="divTitle col-sm-12"><h1>Données personnelles</h1></div>
    <form class="form-signin" action="index.php?ctrl=user&action=doUpdate" method="post">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>">

      <label for="password">Nouveau mot de passe</label>
      <input type="password" class="form-control" name="password" id="password">

      <label for="adress">Adresse</label>
      <input type="text" class="form-control" name="address" id="address" value="<?php echo $address;?>">

      <label for="postalCode">Code postal</label>
      <input type="text" class="form-control" name="postalCode" id="postalCode" value="<?php echo $postalcode;?>">

      <label for="city">Ville</label>
      <input type="text" class="form-control" id="city" name="city" value="<?php echo $city;?>">

      <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer les modifications</button>
      <?php
        if(isset($info)) { echo $info;}
      ?>
    </form>
</div>
</div>
