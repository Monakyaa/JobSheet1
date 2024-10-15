<?php
abstract class Jurnal
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama=$nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    abstract public function pengajuanJurnal();
}

class JurnalDosen extends Jurnal
{
    private $nidn;

    public function __construct($nama, $nidn)
    {   
        parent::__construct($nama);
        $this->nidn=$nidn;
    }

    public function pengajuanJurnal()
    {
        echo "Ini adalah cara untuk pengajuan jurnal dosen dengan nama : " .$this->getNama(). "</br>";
    }
}

class JurnalMahasiswa extends Jurnal
{
    private $nim;

    public function __construct($nama, $nim)
    {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function pengajuanJurnal()
    {
        echo "Ini adalah cara untuk pengajuan jurnal dosen dengan nama : " . $this->getNama() . "</br>";
    }
}

$dosen = new JurnalDosen ("Dewi Mona", "20000001022");
$dosen->pengajuanJurnal();

$mahasiswa = new JurnalMahasiswa("Mona", "230102058");
$mahasiswa->pengajuanJurnal();

?>