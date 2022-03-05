<?php 

class Bycicle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bycicle";
    public $weight;
    private $unitOfWeight = false;

    /**
     * Get the values of properties
     */
    public function getInfo() {
        echo "{$this->getBrand()} {$this->getModel()} ({$this->getYear()}) - {$this->getDescription()} | {$this->getWeight()}";
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        if ($this->unitOfWeight) {
            return "Bike is {$this->weight} kilograms.";
        } else {
            return "Bike is {$this->weight} grams.";
        }
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight, $unit = false) {
        if ($unit) {
            $this->unitOfWeight = true;
        } else {
            $this->unitOfWeight = false;
        }
        $this->weight = $weight;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
}

echo "<hr/>";
$bycicle1 = new Bycicle();
$bycicle1->setBrand("Shimano")->setModel("A28HC")->setYear(2022)->setWeight(2560);
$bycicle1->getInfo();


echo "<hr/>";
$bycicle2 = new Bycicle();
$bycicle2->setBrand("Vipper")->setModel("BJ294CC")->setYear(2021)->setWeight(5, true);
$bycicle2->getInfo();