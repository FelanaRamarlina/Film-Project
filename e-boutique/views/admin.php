<p>Bienvenue sur la page admin</p>

<p>Utilisateurs<p/>
<table class="form-table" style="border-collapse:collapse;">
<?php
  $dologinQuery = "SELECT * FROM users where admin=0;";
  $req = $this->db->prepare($dologinQuery);
  $req->execute();
  while ($donnees = $req->fetch())
  {
  ?> <tr>
        <td style='border:1px solid black;'><?php echo $donnees['firstName']?></td>
        <td style='border:1px solid black;'><?php echo $donnees['lastName']?></td>
        <td style='border:1px solid black;'><?php echo $donnees['address']?></td>
        <td style='border:1px solid black;'><?php echo $donnees['postalCode']?></td>
        <td style='border:1px solid black;'><?php echo $donnees['city']?></td>
        <td style='border:1px solid black;'><button type='button'>Modifier</button></td>
        <td style='border:1px solid black;'><button type='button'>Supprimer</button></td>
      </tr>
<?php  }
?>
</table>
