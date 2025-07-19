<?php

trait Distribuzione  //proprietà che si può applicare a più classi
{
    protected $distribuzione;

    //metodo/funzione
    public function showDistribution($mostraDistribuzione)
    {
        if ($mostraDistribuzione == "Italia") {
            $this->distribuzione = $mostraDistribuzione;
        } else {
            $this->distribuzione = "Non per il mercato italiano";
        }
    }
}
