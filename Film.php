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


    // CONSTRUCTEUR ------------------------------------------

    public function __construct(string $titre, string $dateSortieFr, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis = "")
    {
        $this->titre = $titre;
        $this->dateSortieFr = new DateTime($dateSortieFr);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->synopsis = $synopsis;
        $realisateur->ajouterFilm($this);
        $genre->ajouterFilm($this);
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
    // FIN GETTERS ET SETTERS ------------------------------------------

    // METHODES ------------------------------------------

    // Méthode __toString 
    public function __toString()
    {
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
        return $this->titre . " - " . $formatter->format($this->dateSortieFr) . " - " . $this->duree . " minutes - " . $this->realisateur;
    }

    // Ajoute un casting au film

    public function ajouterCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }


    // Affiche la liste des acteurs ayant jouer dans le film
    public function afficherActeur()
    {
        $result = "<h3>Liste des acteurs ayant jouer dans le film : <br></h3>";
        $castings = $this->getCastings();
        foreach ($this->castings as $casting) {
            $result .= $casting->getActeur() . "</br>";
        }
        return $result;
    }


}