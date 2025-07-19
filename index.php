<?php

require_once './Traits/Distribuzione.php';
require_once './Models.php/Movie.php';
require_once './Models.php/Genre.php';

//istanze/oggetti
$firstMovie = new Movie("La grande scommessa", 2005, new Genre("action", "Film caratterizzati da scene spettacolari e un ritmo incalzante")); //[new Genre("storico"),new Genre("romantico")]
$secondMovie = new Movie("Non saprei cosa dirti", 1998, new Genre("thriller", "Film che generano suspense e tensione"));

$firstMovie -> showDistribution("Italia");  //metodo poiché distribuzione è protected
$secondMovie->showDistribution("");

var_dump($firstMovie);
var_dump($secondMovie);
