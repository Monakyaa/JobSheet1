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

    public function getRole(){
        echo "Ini role untuk person dengan nama : ". $this->getName()."<br>";
    }

    // Tambahkan metode printRole
    public function printRole($person){
        $person->getRole(); // Memanggil metode getRole dari objek yang diberikan
    }
}

class Mahasiswa extends Person{
    private $nim;

    public function __construct($name, $nim)
    {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getRole()
    {
        echo "Ini role untuk Mahasiswa dengan nama: ".$this->getName()."<br>";
    }

    public function getNim(){
        return $this->nim;
    }
}

class Dosen extends Person{
    private $nidn;

    public function __construct($name, $nidn)
    {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getRole()
    {
        echo "Ini role untuk NIDN Dosen: ".$this->getNidn()."<br>";
    }

    // Override getName
    public function getName()
    {
        return $this->name."<br>";
    }

    public function getNidn(){
        return $this->nidn;
    }
}

// Buat objek Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa("Dewi", "230102058");
$dosen = new Dosen("Mona", "23010000000");

// Tambahkan nama untuk objek Person
$person = new Person("Dewi Mona Rizki");

// Panggil metode printRole
$person->printRole($mahasiswa);
$person->printRole($dosen);
?>