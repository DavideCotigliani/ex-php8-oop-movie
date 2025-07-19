<?php

class Movie
{
    use Distribuzione; //utilizzo il trait Distribuzione;

    //attributi
    public $titolo;
    public $anno;
    public $genres = [];

    public function __construct($_titolo, $_anno, array $_genres)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genres = $_genres;
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
