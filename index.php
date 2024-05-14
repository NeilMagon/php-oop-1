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

        public function getFullMovie(){
            $full_movie = $this->name . ', ' . $this->director . ', ' . $this->year;
            return $full_movie;
        }
        public function getMovieInfo(){
            $movie_info = $this->rating . ', ' . $this->genre . ', ' . $this->duration;
            return $movie_info;
        }
    }

    $movie_1 = new Movie('Joker','Todd Philips', 2019, '8.4', 'Thriller', '121 min');
    $movie_2 = new Movie('Bohemian Rhapsody','Bryan Singer', 2018, '8.1', 'Biografico', '134 min');
    var_dump($movie_1);
    var_dump($movie_2);

    $movies = [
        $movie_1,
        $movie_2
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php foreach($movies as $movie){ ?>
        <h1><?php echo $movie->getFullMovie(); ?></h1>
        <h2><?php echo $movie->getMovieInfo(); ?></h2>
    <?php } ?>
</body>
</html>