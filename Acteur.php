<?php

class Acteur extends Personne
{
	private array $castings;

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

	// METHODES ------------------------------------------

	public function ajouterCasting(Casting $casting)
	{
		$this->castings[] = $casting;
	}

	// affiche la filmographie de l'acteur
	public function afficherFilms()
	{
		$resultat = "<h3>FILMOGRAPHIE : <br></h3>";
		$castings = $this->getCastings();
		foreach ($this->castings as $casting) {
			$resultat .= ($casting->getFilm())->getTitre() . "<br>";
		}
		return $resultat;

	}
}