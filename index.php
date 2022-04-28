<?php
  require_once __DIR__.'/movie.php';

  $batman = new Movie(
    'https://mr.comingsoon.it/imgdb/locandine/235x336/57933.jpg',
    'The Batman',
    '2022',
    'Fantasy',
    'Matt Reeves'
);

$morbius = new Movie(
    'https://mr.comingsoon.it/imgdb/locandine/235x336/58110.jpg',
    'Morbius',
    '2022',
    'Daniel Espinosa',
    'Daniel Espinosa'
);

$uncharted = new Movie(
    'https://mr.comingsoon.it/imgdb/locandine/235x336/50817.jpg',
    'Uncharted',
    '2022',
    'Avventura - Azione',
    'Ruben Fleischer'
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
  <div class="container">
    <div class="card-wrap">
      <figure>
        <img src="<?php echo $batman->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $batman->title ?>
        </h2>
        <span><?php echo $batman->language ?></span>
        <span><?php echo $batman->director ?></span>
        <span><?php echo $batman->releaseDate ?></span>
      </div>
    </div>

    <div class="card-wrap">
      <figure>
        <img src="<?php echo $morbius->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $morbius->title ?>
        </h2>
        <span><?php echo $morbius->language ?></span>
        <span>Directed by: <a href="https://www.mymovies.it/film/2022/morbius/" target="_blank""><?php echo $morbius->director ?></a></span>
        <span>Release date: <?php echo $morbius->exist() ?></span>
      </div>
    </div>

    <div class="card-wrap">
      <figure>
        <img src="<?php echo $uncharted->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $uncharted->title ?>
        </h2>
        <span><?php echo $uncharted->language ?></span>
        <span>Directed by: <a href="https://www.mymovies.it/film/2022/uncharted/" target="_blank""><?php echo $uncharted->director ?></a></span>
        <span>Release date: <?php echo $uncharted->exist() ?></span>
      </div>
    </div>

  </div>
</body>
</html> 