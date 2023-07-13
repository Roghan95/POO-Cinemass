<?php

class Personne
{
	protected string $nom;
	protected string $prenom;
	protected string $sexe;
	protected DateTime $dateNaissance;


	function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->sexe = $sexe;
		$this->dateNaissance = new DateTime($dateNaissance);
	}

	// SETTERS -----------------------------------------------

	public function setNom(string $nom)
	{
		$this->nom = $nom;
	}

	public function setPrenom(string $prenom)
	{
		$this->prenom = $prenom;
	}

	public function setSexe(string $sexe)
	{
		$this->sexe = $sexe;
	}

	public function setDateNaissance(DateTime $dateNaissance)
	{
		$this->dateNaissance = $dateNaissance;
	}

	// GETTERS -------------------------------------------------

	public function getNom(): string
	{
		return $this->nom;
	}

	public function getPrenom(): string
	{
		return $this->prenom;
	}

	public function getSexe(): string
	{
		return $this->sexe;
	}

	public function getDateNaissance(): DateTime
	{
		return $this->dateNaissance;
	}

	// FIN SETTERS & GETTERS ------------------------------------

	// METHODES toString() --------------------------------------

	public function __toString()
	{
		$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
		return $this->nom . " " . $this->prenom . " - " . $this->sexe . " - né le : " . $formatter->format($this->dateNaissance);
	}

}