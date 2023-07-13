<?php

class Acteur extends Personne
{
	private array $castings = [];

	// CONSTRUCTEUR ------------------------------------------

	function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->castings = [];
	}

	// GETTERS -----------------------------------------------
	public function getCastings(): array
	{
		return $this->castings;
	}

	// SETTERS -----------------------------------------------
	public function setCastings(array $castings)
	{
		$this->castings = $castings;
	}

	// METHODE toString() -------------------------------------
	public function __toString()
	{
		$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
		return $this->nom . " " . $this->prenom . " - " . $this->sexe . " - né le : " . $formatter->format($this->dateNaissance);
	}

	// METHODES ------------------------------------------

	public function ajouterCasting($casting)
	{
		$this->castings[] = $casting;
	}


	// public function getFilms()
	// {
	// 	$films = [];
	// 	foreach ($this->castings as $casting) {
	// 		$films[] = $casting->getFilm();
	// 	}
	// 	return $films;
	// }


	// affiche la filmographie de l'acteur
	public function getFilms()
	{
		$resultat = "FILMOGRAPHIE : <br>";
		$castings = $this->getCastings();
		foreach ($this->castings as $casting) {
			$resultat .= ($casting->getFilm())->getTitre() . "<br>";
		}
		return $resultat;

	}
}