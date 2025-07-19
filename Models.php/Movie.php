<?php

class Movie
{
    use Distribuzione; //utilizzo il trait Distribuzione;

    //attributi
    public $titolo;
    public $anno;
    public Genre $genre;     //Movie has a Genre

    public function __construct($_titolo, $_anno, Genre $genre)       //da vedere la variante per il bonus 1 ("array_genres")
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genre = $genre;
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
