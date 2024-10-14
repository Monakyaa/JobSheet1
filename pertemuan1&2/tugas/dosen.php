<?php
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    public function deskripsi(){
        return "Dosen Jurusan Komputer dan Bisnis bernama $this->nama dengan NIP $this->nip yang mengampu matakuliah $this->mataKuliah";
    }
}
$dosen = new Dosen("Riyadi Purwanto, S.T.,M.Eng","198503182019031013","SIM");
echo $dosen->deskripsi();
?>