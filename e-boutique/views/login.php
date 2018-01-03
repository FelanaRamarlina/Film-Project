
	<div class="container">
		<form class="login-form" action="index.php?ctrl=user&action=doLogin" method="post">

			<table class="form-table">
				<tr>
					<td><label for="email">Email</label></td>
					<td><input type="text" name="email" id="email" placeholder="Email"></td>
				</tr>

				<tr>
					<td><label for="password">Mot de passe</label></td>
					<td><input type="password" name="password" id="password" placeholder="Mot de passe"></td>
				</tr>
			</table>
			<input type="submit" value="Connexion" class="submit">

			<?php
				if(isset($info)) { echo $info;}
			?>

		</form>

	</div>
