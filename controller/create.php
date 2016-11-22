<?php
// Chargement des classes et connexion database
require ('init.php');


// On contrôle les entrées
if(!empty($_POST['create'])){
	// On crée un objet compte
	$compte = new Compte([
		'name' => $_POST['create'],
		'user_id' => 1 
	]);

	// On envoie les valeurs de l'objet crée a la bdd
	$manager->create($compte);
}
header('location: ../view/index.php');
