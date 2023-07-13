<?php

class Film
{
    private string $titre;
    private DateTime $dateSortieFr;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $castings = [];
    private string $synopsis;

    public function __construct(string $titre, string $dateSortieFr, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis = "")
    {
        $this->titre = $titre;
        $this->dateSortieFr = new DateTime($dateSortieFr);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->synopsis = $synopsis;
        $realisateur->ajouterFilm($this);
        //$genre->ajouterFilm($this);
    }

    // GETTERS ------------------------------------------

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDateSortieFr()
    {
        return $this->dateSortieFr;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function getCastings(): array
    {
        return $this->castings;
    }

    // SETTERS ------------------------------------------

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDateSortieFr($dateSortieFr)
    {
        $this->dateSortieFr = $dateSortieFr;
    }

    public function setDureeFr($duree)
    {
        $this->duree = $duree;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;
    }

    //-----

    public function ajouterCasting($casting)
    {
        $this->castings[] = $casting;
    }
}
