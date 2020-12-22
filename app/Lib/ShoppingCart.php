<?php

namespace App\Lib;

/**
 * Shopping Cart class for calculating total
 * @file    ShoppingCart.php
 * @author  Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @Updated_at 2020-12-01
 */
class ShoppingCart
{
    private $items =[];
    private $gst;
    private $pst;
    private $hst;
    private $subtotal;
    private $total;
    private $line_item_price_list;

    /**
     * Calculate the total cost of the items
     *
     * @return void
     */
    public function calculateTotal($gst, $pst, $hst)
    {
        $this->subtotal = 0;
        foreach ($this->items as $value) {
    
            $qty = (int)$value->getQty();
            $price = (float)$value->getUnitPrice();
            $this->line_item_price_list[$value->getId()] = $qty * $price;
            $this->subtotal += $this->line_item_price_list[$value->getId()];

        }
        $this->gst = round($this->subtotal * $gst, 2);
        $this->pst = round($this->subtotal * $pst, 2);
        $this->hst = round($this->subtotal * $hst, 2);
        $this->total = $this->subtotal + $this->gst + $this->pst;
    }

    /**
     * Add an item to the shopping cart
     *
     * @param CartItem $item
     * @return void
     */
    public function addItem(CartItem $item){

        // Check if an item has already existed
        $found = false;
        for ($i = 0; $i < count($this->items); $i++){

            if ($this->items[$i]->getId() == $item->getId()){
                // repace the item
                $this->items[$i] = $item;
                $found = true;
            }

        }
        //If not found, add a new item
        if (!$found) {
            $this->items[] = $item;
        }
        
    }

    /**
     * Remove an item from the shopping cart by product Id
     *
     * @param int product id
     * @return void
     */
    public function removeItem($id) {

        $found = false;
        for ($i = 0; $i < count($this->items); $i++){
            if ($this->items[$i]->getId() == $id) {
                unset($this->items[$i]);
                $found = true;
            }
        }

        return $found;
    }

    /**
     * return a price of a line item
     *
     * @param string $product_id
     * @return float
     */
    public function getLineItemPrice($product_id)
    {
        return $this->line_item_price_list[$product_id];
    }

    /**
     * return the sub-total
     *
     * @return float subtotal
     */
    public function getSubTotal()
    {
        return $this->subtotal;
    }

    /**
     * return the GST of all items
     *
     * @return float GST
     */
    public function getGST()
    {
        return $this->gst;
    }

    /**
     * return the PST of all items
     *
     * @return float PST
     */
    public function getPST()
    {
        return $this->pst;
    }
    /**
     * return the HST of all items
     *
     * @return float HST
     */
    public function getHST()
    {
        return $this->hst;
    }

    /**
     * return the total cost of all items
     *
     * @return float Total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * return the items in the shipping cart
     *
     * @return array items array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * return the products details
     *
     * @return array products array
     */
    public function getProducts()
    {
        return $this->products;
    }
}