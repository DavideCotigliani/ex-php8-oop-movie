<?php

require_once './Traits/Distribuzione.php';
require_once './Models.php/Movie.php';
require_once './Models.php/Genre.php';

//istanze/oggetti
$firstMovie = new Movie("La grande scommessa", 2005, new Genre("storico"));
$secondMovie = new Movie("Non saprei cosa dirti", 1998, new Genre("drammatico"));
$firstMovie -> showDistribution("");
var_dump($firstMovie);
var_dump($secondMovie);
