<?php
abstract class Pengguna{
    abstract public function aksesFitur();
}

class Mahasiswa extends Pengguna{
    public function aksesFitur()
    {
        echo"Ini abstrak akses mahasiswa. <br>";
    } 
}
 
class Dosen extends Pengguna{
    public function aksesFitur()
    {
        echo"Ini abstrak akses dosen.";
    } 
}
$mahasiswa = new Mahasiswa();
$mahasiswa->aksesFitur();
$dosen = new Dosen();
$dosen->aksesFitur();
?>