<?php 

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    /**
     * Get the value of name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of surname
     */
    public function getSurname() {
        return $this->surname;
    }

     /**
     * Set the value of tuition
     *
     * @return  self
     */ 
    public function setTuition($tuition)
    {
        $this->tuition = $tuition;

        return $this;
    }

    /**
     * Get the value of tuition
     */ 
    public function getTuition()
    {
        return $this->tuition;
    }

    //Methods
    public function helloWorld() {
        return "Hello World";
    }
    
    public function helloFamily() {
        return "Hello Family";
    }

    public function helloMe() {
        return "Hello me!";
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily();
    }
}

$student = new Student();
$student->setTuition("private Tuition in French");
echo $student->name = "John" . " " . $student->name = "Doe" . " -" . $student->getTuition();
echo $student->helloWorld() . "<br/>";
echo $student->helloFamily() . "<br/>";
echo $student->helloMe() . "<br/>";

echo "<hr/>";
$partStudent = new PartTimeStudent();
echo $partStudent->helloParent();