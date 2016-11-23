<?php
// Chargement des classes et connexion database
require ('init.php');


// On contrôle les entrées
if((!empty($_POST['debiteur'])) AND (!empty($_POST['crediteur'])) AND (!empty($_POST['montant']))) {
	// On va chercher l'objet correspondant a l'id
	$compteCrediteur = $manager->getCompte($_POST['crediteur']);
	$compteDebiteur = $manager->getCompte($_POST['debiteur']);
	$montant = (int)$_POST['montant'];

	$compteCrediteur->credit($montant);
	$compteDebiteur->debit($montant);

	$manager->update($compteCrediteur);
	$manager->update($compteDebiteur);
}
header('location: ../view/index.php');
