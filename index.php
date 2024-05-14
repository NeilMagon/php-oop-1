<?php
    class Movie {
        public $name;
        public $director;
        public $year;
        public $rating;
        public $genre; 
        public $duration;

        public function __construct($_name, $_director, $_year, $_rating, $_genre, $_duration,){
            $this->name = $_name;
            $this->director = $_director;
            $this->year = $_year;
            $this->rating = $_rating;
            $this->genre = $_genre;
            $this->duration = $_duration;
        }
    }

    $movie_1 = new Movie('Joker','Todd Philips', '2019', '8.4', 'Thriller', '121 min');
    $movie_2 = new Movie('Bohemian Rhapsody','Bryan Singer', '2018', '8.1', 'Biografico', '134 min');
    var_dump($movie_1);
    var_dump($movie_2)
?>