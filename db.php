<?php
    require_once __DIR__ . '/Models/Movie.php';

    $movie_1 = new Movie('Joker','Todd Philips', 2019, '8.4', ['Thriller', 'Drama'], '121 min');
    $movie_2 = new Movie('Bohemian Rhapsody','Bryan Singer', 2018, '8.1', ['Biographical', 'Drama', 'Music'], '134 min');
    var_dump($movie_1);
    var_dump($movie_2);

    $movies = [
        $movie_1,
        $movie_2
    ]
?>