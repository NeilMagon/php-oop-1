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
?>