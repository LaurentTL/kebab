<?php

function pre($item)
{
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}

class Order
{
    private $client;
    private $prixAmericain = 4.5;
    private $prixBuffalo = 5.0;
    private $listKebabs = [];
    private $totalPrice = [];

    protected static $instances = [];

    public function __construct()
    {
        self::$instances[] = $this;
    }

    public function client($client)
    {
        is_string($client) ? $this->client = $client : null;
    }


    public function addKebab($kebab)
    {
        $kebab = ucwords(trim((strtolower($kebab))));
        $kebab == "Americain" ? array_push($this->listKebabs, $kebab) && array_push($this->totalPrice, $this->prixAmericain) : null;
        $kebab == "Buffalo" ? array_push($this->listKebabs, $kebab) && array_push($this->totalPrice, $this->prixBuffalo) : null;
    }

    public function removeKebab()
    {
        array_splice($this->listKebabs, -1);
        array_splice($this->totalPrice, -1);
    }

    public function calcPrice()
    {
        $this->totalPrice = array_sum($this->totalPrice);
    }

    public static function getInstances($includeSubclasses = false)
    {
        $return = array();
        foreach(self::$_instances as $instance) {
            if ($instance instanceof get_class($this)) {
                if ($includeSubclasses || (get_class($instance) === get_class($this)) {
                    $return[] = $instance;
                }
            }
        }
        return $return;
    }
}

$order = new Order();
$order->client("Antoine");
$order->addKebab("americain");
$order->addKebab("americain");
$order->addKebab("buffalo");
$order->addKebab("buffalo");
$order->addKebab("americain");
$order->addKebab("buffalo");
$order->removeKebab();
$order->removeKebab();
$order->calcPrice();

pre($order);
