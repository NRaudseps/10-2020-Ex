<?php

require_once 'Movie.php';

$movieArr = [
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG')
];

foreach (Movie::GetPG($movieArr) as $movie) {
    echo 'Movie Title: ' . $movie->getTitle() . ' ' .
        'Studio: ' . $movie->getStudio() . ' ' .
        'Rating: ' . $movie->getRating() . PHP_EOL;
    echo PHP_EOL;
}