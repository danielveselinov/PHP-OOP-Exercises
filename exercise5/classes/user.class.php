<?php 

class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username, $is_admin = false)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setUsername($username);
        $this->setAdmin($is_admin);
    }

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