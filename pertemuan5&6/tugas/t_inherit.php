<?php
class Person{
    protected $name;
    public function __construct($name)
    {
        return $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getRole(){
        echo "Ini role untuk person dengan nama : ". $this->getName()."<br>";
    }
}
class Mahasiswa extends Person{
    private $nim;
    public function __construct($name, $nim)
    {
        parent::__construct($name);
        $this->nim=$nim;
    }
    public function getRole()
    {
        echo "Ini role untuk Mahasiswa dengan nama: ".$this->getName()."<br>";
        
    }
}
class Dosen extends Person{
    private $nidn;
    public function __construct($name, $nidn)
    {
        parent::__construct($name);
        $this->nidn=$nidn;
     }
    public function getRole()
    {
        echo "Ini role untuk Dosen dengan nama: ".$this->getName()."<br>";
        
    }
    }

$person = new Person("Mona");
$person->getRole();

$mahasiswa = new Mahasiswa("Dewi Mona Rizki","230102058");
$mahasiswa->getRole();

$dosen = new Dosen("Raharjo","2000000000001");
$dosen->getRole();

?>