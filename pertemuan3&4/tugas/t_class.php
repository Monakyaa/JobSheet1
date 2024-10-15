<?php
//CLASS
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function deskripsi(){
        return "Nama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan";
    }
}

$mahasiswa = new Mahasiswa("Dewi Mona Rizki", "230102058", "Komputer dan Bisnis");
echo $mahasiswa->deskripsi();

?>