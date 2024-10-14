<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama; 
        $this->nim = $nim;   
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Perkenalkan, nama saya $this->nama, dengan NIM $this->nim, jurusan $this->jurusan.";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Dewi Mona Rizki", "230102058", "Komputer dan Bisnis");

// Tampilkan data mahasiswa sebelum pembaruan
echo $mahasiswa->tampilkanData() . "<br>";

// Mengubah jurusan mahasiswa
$mahasiswa->updateJurusan("RMIP");

// Mengubah NIM mahasiswa
$mahasiswa->setNim("230102000");

// Tampilkan data mahasiswa setelah pembaruan
echo $mahasiswa->tampilkanData();
?>
