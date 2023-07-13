<?php

class Casting
{
	private Acteur $acteur;
	private Film $film;
	private Role $role;

	// CONSTRUCTEUR -----------------------
	public function __construct(Acteur $acteur, Film $film, Role $role)
	{
		$this->acteur = $acteur;
		$this->film = $film;
		$this->role = $role;
		$acteur->ajouterCasting($this);
		$film->ajouterCasting($this);
		$role->ajouterCasting($this);
	}

	// GETTERS -----------------------
	public function getActeur()
	{
		return $this->acteur;
	}

	public function getFilm()
	{
		return $this->film;
	}

	public function getRole()
	{
		return $this->role;
	}

	// SETTERS -----------------------
	public function setActeur($acteur)
	{
		$this->acteur = $acteur;
	}

	public function setFilm($film)
	{
		$this->film = $film;
	}

	public function setRole($role)
	{
		$this->role = $role;
	}
	// FIN SETTERS & GETTERS --------------

	// METHODES ---------------------------
	public function __toString()
	{
		return $this->getActeur() . " " . $this->getRole() . " " . $this->getFilm();
	}
}