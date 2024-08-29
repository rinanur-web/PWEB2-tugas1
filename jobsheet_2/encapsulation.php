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
        $this->nim = $nim;
    }

    //metode setter untuk jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
// instansiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa ("Rina Nur Rohmah", "230102021", "komputer dan bisnis");

//Menampilkan data awal dengan memanggil metode getter 
echo "Data Awal : \n<br>";
echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

//mengubah data dengan metode setter
$mahasiswa1->setNama("rara");
$mahasiswa1->setNim("23456");
$mahasiswa1->setJurusan("Teknik Informatika");

//menampilkan data yang sudah diubah dengan metode getter
echo "<br>\nData Setelah Diubah : \n<br>";
echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
?>
