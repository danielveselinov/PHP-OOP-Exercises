<?php

class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price)
    {
        $this->setDescription($description);
        $this->setQuantity($quantity);
        $this->setPrice($price);
    }

    public function printData() {
        echo "Description: {$this->getDescription()} <br/>Quantity: {$this->getQuantity()} | Price: {$this->getPrice()}" . "<br/>
        Total: {$this->calculatePrice()}&euro;";
    }

    private function calculatePrice() {
        return $this->getPrice() * $this->getQuantity(); 
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        if (is_numeric($price)) {
            $this->price = $price;
            return $this;
        }
        echo "Price must be of type integer..";
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
            return $this;
        }
        echo "Quantity must be of type integer..";
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->description = $description;
            return $this;
        }
        echo "Description must be of type string..";
    }
}

echo "<hr/>";
$product = new Product("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam quisquam saepe amet facere suscipit ipsum!", "37", "420");
$product->printData();