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

	// SETTERS -----------------------

	public function setPersonnage($personnage)
	{
		$this->personnage = $personnage;
	}

	// FIN SETTERS & GETTERS --------------

	public function __toString()
	{
		return $this->getPersonnage();
	}

	public function ajouterCasting($casting)
	{
		$this->castings[] = $casting;
	}

	public function afficherActeur()
	{
		$result = "<h3>Liste des acteurs ayant jouer le rôle " . $this->personnage . " : </h3>";
		foreach ($this->castings as $casting) {
			$result .= $casting->getActeur() . "</br>";
		}

		return $result;
	}
}
