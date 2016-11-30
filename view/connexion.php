<?php include("header.php"); ?>
	<form action="../controller/login.php" method="post" class="connexion">
							<h3>Connexion</h3>
							<label for="pseudo">Pseudo</label><br>
							<input name="pseudo" type="text"><br>
							<label for="password">Password</label><br>
							<input name="password" type="text"><br>	
							<input type="submit" value="Connexion">
						</form>
<?php include("footer.php"); ?>
