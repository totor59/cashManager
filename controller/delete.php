<?php
// Chargement des classes et connexion database
require ('init.php');


// On contrôle les entrées
if(!empty($_POST['delete'])) {
		// On associe l'id indiquée dans le form a la valeur id de l'objet Compte
	$compte = new Compte([
		'id' => $_POST['delete'],
	]);
	// On envoie la requete au manager
	$manager->delete($compte);	
}
header('location: ../view/index.php');
