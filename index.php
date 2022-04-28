<?php
  require_once __DIR__.'/movie.php';

  $batman = new Movie(
    'https://mr.comingsoon.it/imgdb/locandine/235x336/57933.jpg',
    'The Batman',
    '2022',
    'Fantasy',
    'Matt Reeves'
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

  </div>
</body>
</html> 