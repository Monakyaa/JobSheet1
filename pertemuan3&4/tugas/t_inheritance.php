<?php
class Pengguna{
    protected $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}

class Dosen extends Pengguna{
    public $mataKuliah;
    public function __construct($nama, $mataKuliah){
        parent :: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    public function deskripsi(){
        return "Dosen bernama $this->nama mengampu mata kuliah $this->mataKuliah";
    }

}

$dosen = new Dosen("Raharjo","KWN");
echo $dosen->deskripsi();
?>