<?php

namespace App\Lib;

/**
 * Shopping Cart Item class for storing each item
 * @file    CartItem.php
 * @author  Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @Updated_at 2020-12-01
 */
class CartItem
{
    private $id;
    private $name;
    private $unit_price;
    private $qty;

    public function __construct($id, $name, $unit_price, $qty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->unit_price = $unit_price;
        $this->qty = $qty;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getUnitPrice(){
        return $this->unit_price;
    }

    public function getQty(){
        return $this->qty;
    }

    public function setQty(int $qty){
        $this->qty = $qty;
    }

}
