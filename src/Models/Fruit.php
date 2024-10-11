<?php

class Fruit {
    public $name;
    public $price;
    public $is_fresh;

    public function __construct($name, $price, $is_fresh) {
        $this->name = $name;
        $this->price = $price;
        $this->is_fresh = $is_fresh;
    }
}