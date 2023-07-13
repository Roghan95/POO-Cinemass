<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$realisateur1 = new Realisateur("Robbie", "Williams", "FM", "1978-07-11");


$acteur1 = new Acteur("Stattham", "Jason", "M", "2023-07-10");

$role1 = new Role("Ian Shaw");



$genre1 = new Genre("Action");



$film1 = new Film("Star Wars Episode IV", "2000-01-01", 120, $realisateur1, $genre1);
// $film2 = new Film("Blade Runner", "2000-01-07", 95, $realisateur, $genre);
// $film3 = new Film("Batman", "2007-12-05", 130, $realisateur, $genre);


$casting1 = new Casting($acteur1, $film1, $role1);
$casting2 = new Casting($acteur1, $film1, $role1);


echo $role1->afficherActeur();
