<?php

class Acteur extends Personne
{
	private array $castings = [];

	function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
	}

	public function ajouterCasting($casting)
	{
		$this->castings[] = $casting;
	}
	public function __toString()
	{
		$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
		return $this->nom . " " . $this->prenom . " - " . $this->sexe . " - né le : " . $formatter->format($this->dateNaissance);
	}
}
