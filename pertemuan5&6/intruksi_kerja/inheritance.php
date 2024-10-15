<?php
class Person{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }        
    }
    class Student extends Person{
        private $StudentId;
        public function __construct($name, $StudentId)
        {
            parent::__construct($name, $StudentId);
            $this->StudentId = $StudentId;
        }
        public function getStudentId(){
            return $this->StudentId;
        }
    }
    $Student = new Student("Dewi Mona Rizki","230102058");
    echo "Nama : ". $Student->getName()."<br>";
    echo "Student ID : ". $Student->getStudentId()."\n";
?>