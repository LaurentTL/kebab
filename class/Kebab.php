<?php

function pre($item)
{
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}

class Kebab
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


$kebab = new Kebab("Buffalo");
$kebab1 = new Kebab("Americain");

pre($kebab);
pre($kebab1);
