<?php

require './Grec.php';

class Buffalo extends Grec
{

    private $prixBuffalo = 5.0;

    public function getprice()
    {
        return $this->prixBuffalo;
    }
}
