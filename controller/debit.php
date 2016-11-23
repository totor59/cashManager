<?php
// Chargement des classes et connexion database
require ('init.php');


// On contrôle les entrées
if((!empty($_POST['id'])) AND (!empty($_POST['montant']))) {
	// On va chercher l'objet correspondant a l'id
	$compte = $manager->getCompte($_POST['id']);
	$montant = (int)$_POST['montant'];

	$compte->debit($montant);

	$manager->update($compte);
}
header('location: ../view/index.php');
