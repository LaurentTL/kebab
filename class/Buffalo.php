<?php

require './Kebab.php';

class Buffalo extends Kebab
{

    private $prixBuffalo = 5.0;

    public function getprice()
    {
        return $this->prixBuffalo;
    }
}
