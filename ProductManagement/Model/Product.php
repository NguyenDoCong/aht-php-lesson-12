<?php

namespace Model;

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $provider;

    public function __construct($name, $price, $description, $provider)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->provider = $provider;
    }
}
