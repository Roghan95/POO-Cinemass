<?php

class Role
{
	private string $personnage;
	private array $castings = [];

	public function __construct(string $personnage)
	{
		$this->personnage = $personnage;
	}

	// GETTERS -----------------------

	public function getPersonnage()
	{
		return $this->personnage;
	}

	public function getCastings(): array
	{
		return $this->castings;
	}

	// SETTERS -----------------------

	public function setPersonnage($personnage)
	{
		$this->personnage = $personnage;
	}

	// FIN SETTERS & GETTERS --------------

	// METHODES ---------------------------

	public function __toString()
	{
		return $this->getPersonnage();
	}

	public function ajouterCasting($casting)
	{
		$this->castings[] = $casting;
	}

	public function afficherFilmographie()
	{
		$result = "<h3>Liste des acteurs ayant jouer le rôle  : <br></h3>";
		$castings = $this->getCastings();
		foreach ($this->castings as $casting) {
			$result .= $casting->getActeur() . "</br>";
		}

		return $result;
	}
}