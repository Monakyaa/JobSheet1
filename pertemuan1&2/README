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
