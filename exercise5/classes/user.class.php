<?php 
abstract class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    
    /**
     * Print user full name, if user=admin prints (admin)
     */
    public function printFullName() {
        if ($this->getAdmin()) {
            echo "{$this->getName()} {$this->getSurname()} `(admin)`";
        } else {
            echo "{$this->getName()} {$this->getSurname()}";
        }
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of is_admin
     *
     * @return  self
     */ 
    public function setAdmin($is_admin)
    {
        $this->is_admin = $is_admin;

        return $this;
    }

    /**
     * Get the value of is_admin
     */ 
    public function getAdmin()
    {
        return $this->is_admin;
    }
}

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
        echo "{$this->getCity()}, {$this->getState()}, {$this->getCountry()}";
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

class AdminUser extends User {
    public function __construct($name, $surname, $username, $is_admin = false)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setUsername($username);
        $this->setAdmin($is_admin);
    }
}