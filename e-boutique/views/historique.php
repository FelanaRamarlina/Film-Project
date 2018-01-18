<div class="monEspace  container">
  <div class="row">
    <div class="divTitle col-sm-12"><h1>Historique de mes achats</h1></div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom du Film</th>
          <th>Prix</th>
          <th>Date d'achat</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once('./model/UserManager.class.php');

        $historique = "SELECT libelle, prix, date_achat FROM Produit p, Historique h, users u WHERE p.id_produit = h.id_produit AND u.id_user = h.id_user AND u.email='".$_SESSION["user"]."'";
        $query = $this->db->query($historique);
        $i = 1;
        while ($donnees = $query->fetch())
        {
        ?>
          <tr>
            <th scope="row"><?php  echo $i ?></th>
            <td><?php  echo $donnees['libelle']; ?> </td>
            <td><?php  echo $prix = $donnees['prix'];?>  </td>
            <td><?php  echo $prix = $donnees['date_achat'];?>  </td>
          </tr>
        <?php
        $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
