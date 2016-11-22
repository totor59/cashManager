<?php

require ('../controller/init.php')

?>


<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>ca$hMonitor</title>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
		<link rel="icon" href="favicon.ico">


	</head>

	<body>
		<div class="container">
			<h1>t0t0r ca$hManager</h1>
			<!-- COMPTES -->

			<div class="accountcontainer">
<?php
$list = $manager->getList();
foreach($list as $compte){
?>

				<table class="compte">
					<tr>
						<td width="70%">
							Compte
						</td>
						<td width="30%">
						N° <?php echo $compte->getId(); ?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<?php echo $compte->getName(); ?>
						</td>
					</tr>
					<tr>	
						<td>
							Solde:
							</td>
							<td>
							<?php echo $compte->getSolde() .'€'; ?>
						</td>

					</tr>
				</table>
<?php } ?>
			</div>

			<!-- FORMULAIRES -->

			<div class="formcontainer">
				<div class="col">
						<form action="../controller/create.php" method="post">
							<h3>Créer un nouveau compte</h3>
							<label for="create">Nom du compte à créer</label><br>
							<input name="create" type="text"><br>
							<input type="submit" value="Créer">
						</form>
						<form action="">
							<h3>Créditer un compte</h3>
							<label for="crebit">N° du compte à créditer</label><br>
							<input name="crebit" type="text"><br>
							<label for="montant">Montant à créditer</label><br>
							<input name="montant" type="text"><br>
							<input type="submit" value="Créditer">
						</form>

				</div>
				<div class="col">
						<form action="">
							<h3>Débiter un compte</h3>
							<label for="debit">N° du compte à débiter</label><br>
							<input name="debit" type="text"><br>
							<label for="montant">Montant à débiter</label><br>
							<input name="montant" type="text"><br>
							<input type="submit" value="Débiter">
						</form>
						<form action="../controller/delete.php" method="post">
							<h3>Supprimer un compte</h3>
							<label for="delete">N° du compte à supprimer</label><br>
							<input name="delete" type="text"><br>
							<input type="submit" value="Supprimer">
						</form>
				</div>
				<div class="col">
						<form action="">
							<h3>Faire un virement</h3>
							<label for="debiteur">N° du compte à débiter</label><br>
							<input name="debiteur" type="text"><br>
							<label for="crediteur">N° du compte à créditer</label><br>
							<input name="crediteur" type="text"><br>
							<label for="montant">Montant du virement</label><br>
							<input name="montant" type="text"><br>
							<input type="submit" value="Faire le virement">
						</form>
				</div>

			</div>
		</div>			
		<canvas id="canvas"></canvas>
		<script src="js/index.js"></script>

	</body>
</html>
