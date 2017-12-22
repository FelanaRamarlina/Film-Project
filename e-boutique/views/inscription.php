<form class="inscription-form" action="index.php?ctrl=user&action=doCreate" method="post">

	<table class="users">
		<tr>
			<td><label for="nom">Nom</label></td>
			<td><input type="text" name="nom" id="nom" placeholder="nom"></td>
		</tr>
    <tr>
			<td><label for="prenom">Prénom</label></td>
			<td><input type="text" name="prenom" id="prenom" placeholder="prenom"></td>
		</tr>
    <tr>
			<td><label for="address">Adresse</label></td>
			<td><input type="text" name="address" id="address" placeholder="address"></td>
		</tr>
    <tr>
  		<td><label for="cp">Code Postal</label></td>
  		<td><input type="text" name="cp" id="cp" placeholder="cp"></td>
  	</tr>
    <tr>
  		<td><label for="ville">Ville</label></td>
  		<td><input type="text" name="ville" id="ville" placeholder="ville"></td>
  	</tr>
    <tr>
			<td><label for="email">Email</label></td>
			<td><input type="email" name="email" id="email" placeholder="email"></td>
		</tr>
    <tr>
			<td><label for="password">Mot de passe</label></td>
			<td><input type="password" name="password" id="password" placeholder="Mot de passe"></td>
		</tr>
	</table>
	<input type="submit" value="Inscription" class="submit">

	<?php
		if(isset($info)) { echo $info;}
	?>

</form>
