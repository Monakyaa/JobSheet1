<?php
class Buku{
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul(){
        return $this->judul;
    }
}
$buku = new Buku ("Pemograman","Andi Praseto");
echo $buku->getJudul();
?>