
	<div class="container">
		<div class="wrapper">
	    <form class="form-signin" action="index.php?ctrl=user&action=doLogin" method="post">
	      <h2 class="form-signin-heading">Connexion</h2>
	      <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" autofocus="" /><br>
	      <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required=""/><br>
	      <!--<label class="checkbox">
	        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
	      </label>-->
	      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
				<?php
					if(isset($info)) { echo $info;}
				?>
	    </form>
  </div>
	</div>
