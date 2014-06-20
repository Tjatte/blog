
<h2>Formulaire d'authentification</h2>

		<hr><!--pour faire un trait-->
		
		<p>Veuillez vous authentifier pour accèder à l'espace protégé</p>
		<form class ="login" action = "login.php" method = "post">
			<input type = "hidden" name = "action" value = "login" />
			<fieldset class ="field">
			
				<div>
					<label for = "username">Votre nom d'utilisateur</label>
					<input input class="arrondie" type ="text" name = "username" value="<?php
				if (isset($_POST['username'])) {
				echo $_POST['username'];
				}
				?>"/>
				
				</div>
				<div class="row">
					<label for = "password">Votre mot de passe</label>
					<input type ="password" name = "password" value="<?php
				if (isset($_POST['password']))  {
				echo $_POST['password'];
				}
				?>" />
				
				</div>
			</fieldset>
		<fieldset class ="actions">
			<button type ="submit">Connection</button> <!--Denna knapp är nödvändig-->
		</fieldset>
		</form>	