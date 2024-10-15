<?php
// Kelas induk Person
class Person {
    // Atribut protected untuk menyimpan nama, dapat diakses oleh kelas turunan
    protected $name;
    
    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        // Menginisialisasi name dan mengembalikan nilainya
        return $this->name = $name;  // Meskipun 'return' tidak diperlukan dalam konstruktor
    }

    // Metode untuk mendapatkan nilai name
    public function getName() {
        return $this->name;
    }

    // Metode untuk menampilkan role, dapat dioverride di kelas turunan
    public function getRole() {
        echo "Ini role untuk person dengan nama: " . $this->getName() . "<br>";
    }
}

// Kelas turunan Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    // Atribut private untuk menyimpan NIM mahasiswa
    private $nim;

    // Konstruktor untuk menginisialisasi name dan nim
    public function __construct($name, $nim) {
        // Memanggil konstruktor kelas induk (Person) untuk inisialisasi name
        parent::__construct($name);
        // Inisialisasi NIM untuk mahasiswa
        $this->nim = $nim;
    }

    // Override metode getRole() dari kelas induk Person
    public function getRole() {
        echo "Ini role untuk Mahasiswa dengan nama: " . $this->getName() . "<br>";
    }
}

// Kelas turunan Dosen mewarisi dari Person
class Dosen extends Person {
    // Atribut private untuk menyimpan NIDN dosen
    private $nidn;

    // Konstruktor untuk menginisialisasi name dan nidn
    public function __construct($name, $nidn) {
        // Memanggil konstruktor kelas induk (Person) untuk inisialisasi name
        parent::__construct($name);
        // Inisialisasi NIDN untuk dosen
        $this->nidn = $nidn;
    }

    // Override metode getRole() dari kelas induk Person
    public function getRole() {
        echo "Ini role untuk Dosen dengan nama: " . $this->getName() . "<br>";
    }
}

// Membuat objek dari kelas Person
$person = new Person("Mona");
// Memanggil metode getRole() untuk objek Person
$person->getRole();

// Membuat objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa("Dewi Mona Rizki", "230102058");
// Memanggil metode getRole() yang dioverride untuk objek Mahasiswa
$mahasiswa->getRole();

// Membuat objek dari kelas Dosen
$dosen = new Dosen("Raharjo", "2000000000001");
// Memanggil metode getRole() yang dioverride untuk objek Dosen
$dosen->getRole();
?>
