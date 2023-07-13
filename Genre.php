<?php

class Genre
{
	private string $nom;
	private array $films = [];


	// CONSTRUCTEUR ------------------------------------------

	public function __construct(string $nom)
	{
		$this->nom = $nom;
	}

	// GETTERS ------------------------------------------
	public function getNom(): string
	{
		return $this->nom;
	}

	public function getFilms(): array
	{
		return $this->films;
	}

	// SETTERS ------------------------------------------

	public function setNom($nom)
	{
		$this->nom = $nom;
	}

	public function setFilms($films)
	{
		$this->films = $films;
	}

	// METHODES ------------------------------------------

	public function ajouterFilm(Film $film)
	{
		$this->films[] = $film;
	}

	public function afficherFilm()
	{
		$result = "Film du genre " . $this->nom . " : <br>";
		$films = $this->getFilms();
		foreach ($films as $film) {
			$result .= $film->getTitre() . "<br>";
		}
		return $result;
	}
}