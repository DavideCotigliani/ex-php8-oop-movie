<?php

require_once './Traits/Distribuzione.php';
require_once './Models.php/Movie.php';
require_once './Models.php/Genre.php';

//istanze/oggetti
$firstMovie = new Movie("La grande scommessa", 2005, new Genre("action", "Film caratterizzati da scene spettacolari e un ritmo incalzante")); //[new Genre("storico"),new Genre("romantico")]
$secondMovie = new Movie("Non saprei cosa dirti", 1998, new Genre("thriller", "Film che generano suspense e tensione"));

$firstMovie -> showDistribution("Italia");  //metodo poiché distribuzione è protected
$secondMovie->showDistribution("Mlo");

var_dump($firstMovie);
var_dump($secondMovie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            <?php echo $firstMovie->titolo ?>
                        </h1>
                        <h2>
                            <?php echo $firstMovie->anno ?>
                        </h2>
                        <h3><?php echo $firstMovie->genre->name ?></h3>
                        <h4><?php echo $firstMovie->genre->description ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            <?php echo $secondMovie->titolo ?>
                        </h1>
                        <h2>
                            <?php echo $secondMovie->anno ?>
                        </h2>
                        <h3><?php echo $secondMovie->genre->name ?></h3>
                        <h4><?php echo $secondMovie->genre->description ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>