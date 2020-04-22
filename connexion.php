<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <fieldset class ="login">
		<legend><h2>Se connecter</h2> </legend> 
		<div>
		<form  method="post" action="">
			<div class = "erreur-connexion">
				<?php
					$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'connexionErreur');
					if($matchFound){
						echo '<p>Login ou mot de passe incorrect.</p>';
					}
				
				?>
			</div>
			<p>Email:  <br/> <input required type="mail" name="mail"/> </p>
			<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
				
			<input type="submit" name="Envoyer" value="Accèder  "/>
					   
		</form>
		</div>
	</fieldset>
	<br>
	<br>
	<a href="inscription.php"><span class="pw-oublie">S'inscrire</span></a>
</body>
</html>