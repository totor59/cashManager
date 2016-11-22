<?php

class CompteManager {
	private $_db; // Instance de PDO.

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function create(Compte $compte) {
		// On crée un compte et on lui assigne le nom indiqué dans le formulaire
		$q = $this->_db->prepare('INSERT INTO compte(name) VALUES(:name)');
		$q->bindValue(':name', $compte->getName());
		$q->execute();
	}

	public function getList($user_id){
		// On crée un tableau vide pour stocker le résultat de la requête
		$listeComptes = [];
		// On sélectionne tous les comptes dans la base de données
		$req = $this->_db->prepare('SELECT id, name, solde, user_id FROM compte');
		$req->execute();
		// On stocke le résultat dans $listeComptes
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC))
		{
			$listeComptes[] = new Compte($donnees);
		}
		return $listeComptes;
	}

	public function delete() {
		// On sélectionne le compte qui correspond a l'ID indiqué dans le formulaire et on le supprime de la BDD
	}

	public function credit() {
		// On crédite le compte visé avec la somme indiquée dans le formulaire 
	}

	public function debit() {
		// On débite le compte visé de la somme indiquée dans le formulaire 
	}

	public function transfer() {
		// On transfère la somme indiquée du compte créditeur au compte débiteur
	}
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}



}
