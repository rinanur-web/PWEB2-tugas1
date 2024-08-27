<?php
//definisi class
class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;

    //constructor
    public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

    public function updateJurusan($jurusanNew){
        $this->jurusan = $jurusanNew;
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa("rina", "230102021", "jkb");

$mahasiswa->tampilkanData();

//untuk menset nilai property ($nama_object->nama_property=nilai)
$mahasiswa->setNim("123");

$mahasiswa->updateJurusan("ti");

echo $mahasiswa->tampilkanData();
?>