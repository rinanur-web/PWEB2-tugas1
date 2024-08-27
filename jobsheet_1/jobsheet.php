<?php
//definisi class
class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi atribut atau property
    public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //method atau fungsi untuk tampil data
    public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

    //method atau fungsi untuk setter nim
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

    //method atau fungsi untuk mengupdate jurusan
    public function updateJurusan($jurusanNew){
        $this->jurusan = $jurusanNew;
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa("rina", "230102021", "jkb");

$mahasiswa->tampilkanData();

//untuk men set nilai property ($nama_object->nama_property=nilai)
$mahasiswa->setNim("123");

//untuk mengupdate jurusan 
$mahasiswa->updateJurusan("ti");

//menampilkan hasil atau output
echo $mahasiswa->tampilkanData(); //output: Nama: rina , Nim: 123, Jurusan: ti
?>