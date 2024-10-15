<?php
// Kelas abstrak Jurnal, menjadi dasar untuk JurnalDosen dan JurnalMahasiswa
abstract class Jurnal {
    // Atribut protected agar bisa diakses oleh kelas turunan
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Metode abstrak, harus diimplementasikan oleh kelas turunan
    abstract public function pengajuanJurnal();
}

// Kelas JurnalDosen mewarisi dari kelas Jurnal
class JurnalDosen extends Jurnal {
    // Atribut private untuk menyimpan NIDN
    private $nidn;

    // Konstruktor untuk menginisialisasi nama dan NIDN
    public function __construct($nama, $nidn) {
        // Memanggil konstruktor kelas induk untuk inisialisasi nama
        parent::__construct($nama);
        // Inisialisasi NIDN untuk dosen
        $this->nidn = $nidn;
    }

    // Implementasi metode abstrak pengajuanJurnal untuk dosen
    public function pengajuanJurnal() {
        echo "Ini adalah cara untuk pengajuan jurnal dosen dengan nama: " . $this->getNama() . "</br>";
    }
}

// Kelas JurnalMahasiswa mewarisi dari kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Atribut private untuk menyimpan NIM
    private $nim;

    // Konstruktor untuk menginisialisasi nama dan NIM
    public function __construct($nama, $nim) {
        // Memanggil konstruktor kelas induk untuk inisialisasi nama
        parent::__construct($nama);
        // Inisialisasi NIM untuk mahasiswa
        $this->nim = $nim;
    }

    // Implementasi metode abstrak pengajuanJurnal untuk mahasiswa
    public function pengajuanJurnal() {
        echo "Ini adalah cara untuk pengajuan jurnal mahasiswa dengan nama: " . $this->getNama() . "</br>";
    }
}

// Membuat objek JurnalDosen
$dosen = new JurnalDosen("Dewi Mona", "20000001022");
// Memanggil metode pengajuanJurnal untuk objek dosen
$dosen->pengajuanJurnal();

// Membuat objek JurnalMahasiswa
$mahasiswa = new JurnalMahasiswa("Mona", "230102058");
// Memanggil metode pengajuanJurnal untuk objek mahasiswa
$mahasiswa->pengajuanJurnal();
?>
