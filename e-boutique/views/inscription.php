<div class="monEspace container">
  <div class="wrapper">
    <div class="divTitle col-sm-12"><h1>Inscription</h1></div>
    <form class="form-signin" action="index.php?ctrl=user&action=doCreate" method="post">
			<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
    	<input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
			<input type="text" class="form-control" name="address" id="address" placeholder="Address">
			<input type="text" class="form-control" name="cp" id="cp" placeholder="Code Postal">
      <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville">
			<input type="email" class="form-control" name="email" id="email" placeholder="Email">
			<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">

      <button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>
      <?php
        if(isset($info)) { echo $info;}
      ?>
    </form>
</div>
