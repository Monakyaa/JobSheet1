<?php
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setNim($nim){
        $this->jurusan=$nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan=$jurusan;
    }        
    }
    $mahasiswa = new Mahasiswa("Dewi Mona Rizki","230102058","JKB");
    echo $mahasiswa->getNama()."\n";
    $mahasiswa->setNama("Jubaedah");
    echo $mahasiswa->getNama()."\n";

?>