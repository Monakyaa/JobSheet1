<?php
class Mobil {
    // Atribut atau properties
    public $merk;
    public $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode atau fungsi
    public function deskripsi() {
        return "Mobil ini adalah $this->merk yang berwarna $this->warna.";
    }
}

// Instansiasi objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
?>
