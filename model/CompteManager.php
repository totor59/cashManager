<?php

class CompteManager {
	private $_db; // Instance de PDO.

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function create(Compte $compte) {
		// On crée un compte et on lui assigne le nom indiqué dans le formulaire
		$req = $this->_db->prepare('INSERT INTO compte(name) VALUES(:name)');
		$req->bindValue(':name', $compte->getName());
		$req->execute();
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

	public function delete(Compte $compte) {
		// On sélectionne le compte qui correspond a l'ID indiqué dans le formulaire et on le supprime de la BDD
		$req = $this->_db->prepare('DELETE FROM compte WHERE id = ' .$compte->getId());
		$req->execute();

	}

	public function getCompte($id) {
		$req = $this->_db->prepare('SELECT * FROM compte WHERE id = :id');
		$req->bindValue(':id', $id);
		$req->execute();
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC))
		{
			$compte = new Compte($donnees);
		}
		return $compte;
	}


	public function update(Compte $compte) {
		$req = $this->_db->prepare('UPDATE compte SET solde = :solde where id = :id');
		$req->bindValue(':solde', $compte->getSolde());
		$req->bindValue(':id', $compte->getId());
		$req->execute();
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
