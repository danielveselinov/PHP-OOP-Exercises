<?php  

require __DIR__ . "/classes/user.class.php";
// require __DIR__ . "/classes/customer.class.php";

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($city, $state, $country)
    {
        $this->setCity($city);
        $this->setState($state);
        $this->setCountry($country);
    }

    public function location() {
        echo "{$this->getCity()} {$this->getState()} {$this->getCountry()}";
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
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}

//
$user = new User("John", "Doe", "john@", true);
$user->printFullName();