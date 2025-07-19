<?php

class Movie
{
    public $titolo;
    public $anno;
    public $genre;

    public function __construct($_titolo, $_anno, Genre $_genre)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genre = $_genre;
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
