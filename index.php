<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

// INSTANCES ------------------------------------------

// Instances de Genre
$genre1 = new Genre("Action");
$genre2 = new Genre("Science-fiction");
$genre3 = new Genre("Fantastique");

// Instances realisateur
$realisateur1 = new Realisateur("Burton", "Tim", "M", "25-08-1958"); // Batman
$realisateur2 = new Realisateur("George", "Lucas", "M", "14-03-1944"); // Star Wars
$realisateur3 = new Realisateur("Ridley", "Scott", "M", "30-11-1937"); // Blade Runner 

// Instances acteur
$acteur1 = new Acteur("Harrison", "Ford", "M", "13-07-1942"); // Han Solo & Rick Deckard
$acteur2 = new Acteur("Mark", "Hamill", "M", "25-09-1951"); // Luke Skywalker
$acteur3 = new Acteur("Keaton", "Michael", "M", "05-09-1951"); // Batman
$acteur4 = new Acteur("Nicholson", "Jack", "M", "22-04-1937"); // Joker

// Film instances
$film1 = new Film("Batman", "01-01-1989", 126, $realisateur1, $genre1); // Batman
$film2 = new Film("Star Wars Episode IV", "08-02-2017", 121, $realisateur2, $genre3); // Star Wars
$film3 = new Film("Blade Runner", "08-02-2017", 117, $realisateur3, $genre2); // Blade Runner

// Instances role
$role1 = new Role("Han Solo"); // Star Wars - Han Solo
$role2 = new Role("Batman"); // Batman - Batman
$role3 = new Role("Rick Deckard"); // Blade Runner - Rick Deckard
$role4 = new Role("Joker"); // Batman - Joker
$role5 = new Role("Luke Skywalker"); // Star Wars - Luke Skywalker

// Instances casting
$casting1 = new Casting($acteur1, $film3, $role3); // Blade Runner
$casting2 = new Casting($acteur3, $film1, $role2); // Batman
$casting3 = new Casting($acteur1, $film2, $role1); // Han Solo
$casting4 = new Casting($acteur4, $film1, $role4); // Joker
$casting5 = new Casting($acteur2, $film2, $role5); // Luke Skywalker
// TEST ------------------------------------------

echo $role5->afficherFilmographie() . "<br>"; // affiche les films dans lesquels Han Solo a joué

echo $film2->afficherActeur() . "<br>"; // affiche les acteurs qui ont joué dans Batman

echo $genre3->afficherFilm() . "<br>"; // affiche les films de genre fantastique

echo $acteur2->afficherFilms() . "<br>"; // affiche les films de Harrison Ford

echo $realisateur2->affichierFilms() . "<br>"; // affiche les films de Tim Burton