<?php 

interface HasInfo {
    public function getInfo();
}

class Addres implements HasInfo {
    public $street;
    public $number;
    public $city;

    public function __construct($street, $number, $city)
    {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    public function getInfo()
    {
        echo "Address: street {$this->getStreet()}, number {$this->getNumber()}, city {$this->getCity()}";
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }
}

class Phone implements HasInfo {
    public $prefix;
    public $number;

    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    public function getInfo()
    {
        echo "Number: {$this->prefix}/{$this->number}";
    }
}

class User implements HasInfo {
    public $name;
    public $surname;
    public $address;
    public $phone;

    public function getInfo()
    {
        echo "User: {$this->name} {$this->surname} <br/>";
        $this->address->getInfo();
        echo "<br/>";
        $this->phone->getInfo();
    }
}

$user = new User();
$address = new Addres("Unknown Street", "239", "Shtip");
$phone = new Phone("389", "70602138");

$user->name = "John";
$user->surname = "Doe";
$user->address = $address;
$user->phone = $phone;

$user->getInfo();
