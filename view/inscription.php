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
			<form action="../controller/register.php" method="post" class="inscription">
							<h3>Inscription</h3>
							<label for="pseudo">Pseudo</label><br>
							<input name="pseudo" type="text"><br>
							<label for="email">Adresse email</label><br>
							<input name="email" type="text"><br>
							<label for="password">Password</label><br>
							<input name="password" type="text"><br>
							<label for="confpassword">Confirmation password</label><br>
							<input name="confpassword" type="text"><br>
							<input type="submit" value="Inscription">
						</form>


<?php include("footer.php"); ?>
