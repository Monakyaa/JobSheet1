<?php
class Produk {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Buku extends Produk {
    private $penulis;

    public function __construct($nama, $penulis) {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

$buku1 = new Buku("Pemrograman", "Situmorang");
echo $buku1->getNama(); 
?>
