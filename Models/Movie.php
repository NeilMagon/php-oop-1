<?php
    class Movie {
        public $name;
        public $director;
        public $year;
        public $rating;
        public $genres; 
        public $duration;

        public function __construct($_name, $_director, $_year, $_rating, $_genres, $_duration,){
            $this->name = $_name;
            $this->director = $_director;
            $this->year = $_year;
            $this->rating = $_rating;
            $this->genres = $_genres;
            $this->duration = $_duration;
        }

        public function getFullMovie(){
            $full_movie = $this->name . ', ' . $this->director . ', ' . $this->year;
            return $full_movie;
        }
        public function getMovieInfo(){
            $movie_info = $this->rating . ', ' .implode(', ', $this->genres) . ', ' . $this->duration;
            return $movie_info;
        }
    }
?>