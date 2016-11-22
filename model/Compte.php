<?php

// On crée la classe Compte
class Compte {
	private $_id;
	private $_name;
	private $_solde;
	private $_user_id;

       
	// Hydrater

	public function hydrate(array $donnees)	{
		foreach ($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);
			// Si le setter correspondant existe.
			if (method_exists($this, $method)) {
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}

	// Constructer

	public function __construct(array $donnees) {
		$this->hydrate($donnees);
	}

	// Setters

	public function setId($id) {
		$this->_id = $id;
	}
	public function setName($name) {
		if(is_string($name)) {
			$this->_name = $name;
		}
	}
	public function setSolde($solde) {
		$this->_solde = $solde;
	}
	public function setUserId($user_id) {
		$this->_user_id = $user_id;
	}

	// Créditer et débiter

	public function credit($montant) {
		if(( $montant > 0 ) && (is_int($montant))) {
			$this->$solde += $montant;
		} else {
			echo 'ERREUR FUNCTION CREDIT';
		}
	}
	public function debit($montant) {
		if(( $montant > 0 ) && (is_int($montant))) {
			$this->$solde -= $montant;
		} else {
			echo 'ERREUR FUNCTION DEBIT';
	}
	}

	// Getters

	public function getId()
       	{
		return $this->_id;
	}
	public function getName() {
		return $this->_name;
	}
	public function getSolde() {
		return $this->_solde;
	}
	public function getUserId() {
		return $this->_user_id;
	}
		
}
