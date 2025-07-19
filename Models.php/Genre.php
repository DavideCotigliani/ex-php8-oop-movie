<?php

class Genre
{
    //attributi
    public $name;
    public $description;


    public function __construct($_name, $_description)
    {

        $this->name = $_name;
        $this->description = $_description;

    }
}
