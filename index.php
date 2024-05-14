<?php
    require_once __DIR__ . '/Models/Movie.php';
    require_once __DIR__ . '/db.php';
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