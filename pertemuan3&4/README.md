# JobSheet 2
## Encapsulation (Pembukusan)
Encapsulation merupakan pembukusan yang ditandai dengan pembatas seperti public, protected dan private pada setiap methodnya.
### Contoh Pada Project
```sh
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
```
## Inheritance (Pewarisan)
Inheritance atau pewarisan merupakan pewarisan dari class induk ke kelas lain. Biasnya ditandai dengan Prtotected. 
### Contoh pada project
```sh
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
```

## Polymorphism
Polymophism merupakan cara bagaimana objek merespon 2 buah fungsi dan aksi yang berbeda dan dapat mengeksekusinya.
```sh
<?php
class Printer {
public function print(Animal $animal) {
echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
}
}
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$printer = new Printer();
$printer->print($dog); // Output: Buddy says Woof!
$printer->print($cat); // Output: Kitty says Meow!
```
### Contoh pada project
```sh
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
```
#Abstrak (Abstract)
## Abstract Class
Merupakan sebuah class yang tidak dapat di instansiasi atau mewakil dari class atau tidak dapat dibuat sebagai objek dan merupakan kelas dasar untuk kelas kelas yang lebih spesifik.
## Abstract Method
Pada abstract method layaknya "Ini harus dilakukan" namun caranya seperti apa itu bebas tergantung dengan kelas turunan.
### Contoh Pada Project
```sh
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
```
