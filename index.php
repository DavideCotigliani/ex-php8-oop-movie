<?php

class Movie
{
    public $titolo;
    public $anno;

    public function __construct($_titolo, $_anno)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
    }

    public function afterTwothousand() //metodo/funzione per capire se il titolo è dopo gli anni 2000
    {
        if ($this->anno > 2000) {
            return true;
        } else {
            return false;
        }
    }
}

//istanze
$firstMovie = new Movie("La grande scommessa", 2005);
$secondMovie = new Movie("Non saprei cosa dirti", 1998);
var_dump($firstMovie);
var_dump($secondMovie);
