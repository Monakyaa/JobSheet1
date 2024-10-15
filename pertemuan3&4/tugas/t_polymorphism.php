<?php
class Pengguna{
    public function aksesFitur(){
        
    }
}
class Dosen extends Pengguna{
    public function aksesFitur()
    {
        echo "Akses ini untuk Dosen.<br>";
    }
}

class Mahasiswa extends Pengguna{
    public function aksesFitur()
    {
        echo "Akses ini untuk Mahasiswa.";
    }
}

#dipanggil
$dosen = new Dosen();
$dosen->aksesFitur();
$mahasiswa = new Mahasiswa();
$mahasiswa->aksesFitur();

?>