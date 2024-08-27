<?php
//definisi class 
class Mahasiswa {
    private $nama; //Private hanya dapat diakses dalam kelas itu sendiri.
    private $nim; //Private hanya dapat diakses dalam kelas itu sendiri.
    private $jurusan; //Private hanya dapat diakses dalam kelas itu sendiri.

    //constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode getter untuk nama
    public function getNama(){
        return $this->nama;
    }

    //metode getter untuk nim
    public function getNim(){
        return $this->nim;
    }

    //metode getter untuk jurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    //metode setter untuk nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    //metode setter untuk nim
    public function setNim($nim){
        $this->nama = $nim;
    }

    //metode setter untuk jurusan
    public function setJurusan($jurusan){
        $this->nama = $jurusan;
    }
}
//instansiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa ("Rina Nur Rohmah", "230102021", "komputer dan bisnis");
//mengakses property menggunakan getter
echo $mahasiswa1->getNama() . "<br>";
echo $mahasiswa1->getNim() . "<br>";
echo $mahasiswa1->getJurusan() . "<br>";

//mengubah nilai property menggunakan setter
echo $mahasiswa1->setNama("Nur");
echo $mahasiswa1->setNim("2021");
echo $mahasiswa1->setJurusan("komputer");
?>