<?php

require './Kebab.php';

class Americain extends Kebab
{

    private $prixAmericain = 4.5;

    public function getPrice()
    {
        return $this->prixAmericain;
    }
}
