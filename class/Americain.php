<?php

require './Grec.php';

class Americain extends Grec
{

    private $prixAmericain = 4.5;

    public function getPrice()
    {
        return $this->prixAmericain;
    }
}
