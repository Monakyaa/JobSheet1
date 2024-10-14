<?php
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo() {
        return "Buku ini berjudul $this->judul yang ditulis oleh $this->penulis.";
    }
}

$buku1 = new Buku("Pemrograman", "John Doe");
echo $buku1->tampilkanInfo();
?>
