<?php
// Kelas induk Person
class Person {
    // Atribut protected sehingga dapat diakses oleh kelas turunan
    protected $name;
    
    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Metode untuk mendapatkan nilai name
    public function getName() {
        return $this->name;
    }
}

// Kelas turunan Student, mewarisi dari kelas Person
class Student extends Person {
    // Atribut private untuk menyimpan Student ID
    private $StudentId;

    // Konstruktor untuk menginisialisasi atribut name (dari kelas induk) dan StudentId
    public function __construct($name, $StudentId) {
        // Memanggil konstruktor kelas induk untuk menginisialisasi atribut name
        parent::__construct($name);
        // Inisialisasi atribut StudentId
        $this->StudentId = $StudentId;
    }

    // Metode untuk mendapatkan nilai Student ID
    public function getStudentId() {
        return $this->StudentId;
    }
}

// Membuat objek baru dari kelas Student dengan nama dan StudentId
$Student = new Student("Dewi Mona Rizki", "230102058");

// Menampilkan nama dan Student ID menggunakan metode getter
echo "Nama : " . $Student->getName() . "<br>";
echo "Student ID : " . $Student->getStudentId() . "\n";
?>
