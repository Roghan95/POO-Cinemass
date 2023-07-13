<?php

class Realisateur extends Personne
{
	private array $films;


	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->films = [];
	}


	public function setFilms(array $films)
	{
		$this->films = $films;
	}

	public function getFilms(): array
	{
		return $this->films;
	}

	// Ajoute un film à la filmographie du réalisateur
	public function ajouterFilm(Film $film)
	{
		$this->films[] = $film;
	}

	// Affiche la filmographie du réalisateur

	public function affichierFilms()
	{
		$result = "<h3>Filmographie du réalisateur : <br></h3>";
		$films = $this->getFilms();
		foreach ($films as $film) {
			$result .= $film->getTitre() . "<br>";
		}
		return $result;
	}
}