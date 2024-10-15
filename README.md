# JobSheet 1

Pada jobsheet 1, mahasiswa diharapkan dapat mengimplementasikan konsep dasar OOP dalam PHP dengan membuat class, objek serta menerapkan prinsip encapsulation, inheritance, polymophism, dan abstraction.
## Kelas dan Object
### Kelas(Class)
Kelas merupakan wadah utama atau cetakan seperti cetakan puding berbentuk bunga.
```sh
class Mobil 
```
### Objek(Object)
Object merupakan instansiansi dari class. Contohnya, puding tidak akan berbentuk bunga jika cetakannya bukan bunga, bahkan tidak ada cetakannya.
```sh
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
```
## Atribut dan Method
## Atribut
Atribut merupakan data yang terdapat dalam sebuah class. class mobil ada, warna, merk, jenis bahan bakar, serikendaraan dan lainnya itu termasuk dalam atribut.
```sh
public $merk;
protected $warna;
private $serikendaraan
```
Atribut ada 3 jenis:
Public: Bisa diakses oleh siapapun
Protected: Yakni atribut yang hanya dapat di akses oleh class turunannya.
Private: Atribut yang hanya bisa digunakan pada pembuat class.

### Method
Method merupakan aksi eksekusi dalam class untuk melakukan perintah tertentu.
```sh
public function setNim($nimBaru) {
        $this->nim = $nimBaru;
```
### Contoh Implementasi Class dan Object pada jobsheet1
```sh
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
```
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
### Controh Pada Project
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

# JobSheet 3
## Instruksi Kerja
### Inheritance
```sh
<?php
// Kelas induk Person
class Person {
    // Atribut protected sehingga dapat diakses oleh kelas turunan
    protected $name;
    
    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Metode untuk mendapatkan nilai name
    public function getName() {
        return $this->name;
    }
}

// Kelas turunan Student, mewarisi dari kelas Person
class Student extends Person {
    // Atribut private untuk menyimpan Student ID
    private $StudentId;

    // Konstruktor untuk menginisialisasi atribut name (dari kelas induk) dan StudentId
    public function __construct($name, $StudentId) {
        // Memanggil konstruktor kelas induk untuk menginisialisasi atribut name
        parent::__construct($name);
        // Inisialisasi atribut StudentId
        $this->StudentId = $StudentId;
    }

    // Metode untuk mendapatkan nilai Student ID
    public function getStudentId() {
        return $this->StudentId;
    }
}

// Membuat objek baru dari kelas Student dengan nama dan StudentId
$Student = new Student("Dewi Mona Rizki", "230102058");

// Menampilkan nama dan Student ID menggunakan metode getter
echo "Nama : " . $Student->getName() . "<br>";
echo "Student ID : " . $Student->getStudentId() . "\n";
?>
```
### Encapsulation
```sh
<?php
class Student extends Person
{
    private $name; // Encapsulation: private attribute
    private $studentID;

    public function __construct($name, $studentID)
    {
        $this->name = $name;
        $this->studentID = $studentID;
    }

    // Setter untuk name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter untuk name
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    // Setter untuk studentID
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID()
    {
        return $this->studentID;
    }
}
```
### Polymorphism
```sh
<?php
// Kelas Teacher yang mewarisi dari Person dengan tambahan atribut teacherID
class Teacher extends Person
{
    private $teacherID;

    public function __construct($name, $teacherID)
    {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override getName() untuk Teacher
    public function getName()
    {
        return "Teacher Name: " . $this->name;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }
}

// Override getName() untuk Student
class Student extends Person
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override getName() untuk menampilkan format berbeda
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }
}
```
### Abstract
```sh
// Abstraction: Kelas abstrak Course dengan metode abstrak getCourseDetails()
abstract class Course
{
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course
{
    private $courseName;
    private $platform;

    public function __construct($courseName, $platform)
    {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    public function getCourseDetails()
    {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course
{
    private $courseName;
    private $location;

    public function __construct($courseName, $location)
    {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    public function getCourseDetails()
    {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}
```

## Tugas
### Inheritance
Pewarisan turunan antara class inti dan class turunan (anak)
```sh
class Person
{
    
}
class Mahasiswa extends Person
{

}
class Dosen extends Person
{
    
}
```
Pembuatan untuk atribut dan method class turunan(anak)
```sh
 protected $name;
    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        // Menginisialisasi name dan mengembalikan nilainya
        return $this->name = $name;  // Meskipun 'return' tidak diperlukan dalam konstruktor
    }
    // Metode untuk mendapatkan nilai name
    public function getName() {
        return $this->name;
    }
```
## Polymorphysm
Polymorphysm yang dimiliki hanya satu method namun punya bentuk yang berbeda
```sh
public function getRole() {
        echo "Ini role untuk person dengan nama: " . $this->getName() . "<br>";
}

public function getRole() {
        echo "Ini role untuk Mahasiswa dengan nama: " . $this->getName() . "<br>";
}

public function getRole() {
        echo "Ini role untuk Dosen dengan nama: " . $this->getName() . "<br>";
}
```
## Instansiansi
bentuk instansiansi dari instruksi tugas yang telah dibuat kemudian dipanggil untuk menghasilkan output.
```sh
// Membuat objek dari kelas Person
$person = new Person("Mona");
// Memanggil metode getRole() untuk objek Person
$person->getRole();

// Membuat objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa("Dewi Mona Rizki", "230102058");
// Memanggil metode getRole() yang dioverride untuk objek Mahasiswa
$mahasiswa->getRole();

// Membuat objek dari kelas Dosen
$dosen = new Dosen("Raharjo", "2000000000001");
// Memanggil metode getRole() yang dioverride untuk objek Dosen
$dosen->getRole();
```
Output yang dihasilkan
```sh
Ini role untuk person dengan nama: Mona
Ini role untuk Mahasiswa dengan nama: Dewi Mona Rizki
Ini role untuk Dosen dengan nama: Raharjo
```
## Abstraction
Pembuatan fungsi pada abstract class
```sh
// Kelas abstrak Jurnal, menjadi dasar untuk JurnalDosen dan JurnalMahasiswa
abstract class Jurnal {
}
```
Encapsulatin private untuk nidn supaya tidak ada class lain yang dapat menggunakannya. Pengenalan insialisai pada construct,karena pada class jurnal atribut nama sudah diinisialisasi, maka pada class JurnalDosen hanya perlu ditambahkan kode parent construct. selanjutnya, pada method pengajuanJurnal disesuaikan dengan kebutuhan class nya. Hal ini juga berlaku pada class JurnalMahasiswa.
```sh
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
```
selanjutnya membuat class JurnalMahasiswa
```sh
/ Kelas JurnalMahasiswa mewarisi dari kelas Jurnal
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
```
instansiansi code yang sudah dibuat dengan menginputkan 
```sh
// Membuat objek JurnalDosen
$dosen = new JurnalDosen("Dewi Mona", "20000001022");
// Memanggil metode pengajuanJurnal untuk objek dosen
$dosen->pengajuanJurnal();
// Membuat objek JurnalMahasiswa
$mahasiswa = new JurnalMahasiswa("Mona", "230102058");
// Memanggil metode pengajuanJurnal untuk objek mahasiswa
$mahasiswa->pengajuanJurnal();
?>
```
output yang dihasilkan
```sh
Ini adalah cara untuk pengajuan jurnal dosen dengan nama: Dewi Mona
Ini adalah cara untuk pengajuan jurnal mahasiswa dengan nama: Mona
```
