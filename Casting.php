<?php

class Casting
{
	private Acteur $acteur;
	private Film $film;
	private Role $role;

	public function __construct(Acteur $acteur, Film $film, Role $role)
	{
		$this->acteur = $acteur;
		$this->film = $film;
		$this->role = $role;

		$acteur->ajouterCasting($this);
		$film->ajouterCasting($this);
		$role->ajouterCasting($this);
	}

	public function getActeur()
	{
		return $this->acteur;
	}
}
