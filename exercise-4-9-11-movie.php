<?php

require_once "Movie.php";

$casinoRoyale = new Movie("Casino Royale", "Eon Productions", "PG13");
$glass = new Movie("Glass", "Buena Vista International", "PG13");
$spiderMan = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");

$movies = [$casinoRoyale, $glass, $spiderMan];




var_dump($spiderMan->getPG($movies));