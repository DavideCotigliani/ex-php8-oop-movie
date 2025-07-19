<?php

trait Distribuzione  //proprietà che si possono applicare a più classi
{
    protected $distribuzione;

    //metodo/funzione
    public function showDistribution($mostraDistribuzione)
    {
        if ($mostraDistribuzione == "Italia") {
            $this->distribuzione = $mostraDistribuzione;
        } else {
            "Distribuzione diversa, non consentita";
        }
    }
}
