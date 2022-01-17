<?php

class Grec
{

    private $nom;

    public function __construct($nom)
    {
        $this->setNom($nom);
    }

    private function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    private function getNom()
    {
        return $this->nom;
    }
}


// $kebab = new Grec("Buffalo");
// $kebab1 = new Grec("Americain");
