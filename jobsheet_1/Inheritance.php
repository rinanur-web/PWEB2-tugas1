<?php
//definisi class 
class Pengguna {
    protected $nama; // Dapat diakses oleh kelas itu sendiri dan kelas turunan.
     
    //construct untuk menginisialisasi property
    public function __construct($nama){
        $this->nama = $nama;
    }

    //method untuk menampilkan nama pengguna
    public function getNama(){
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;
     
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
}
//instansiasi objek
$dosen1 = new Dosen("Rina Nur Rohmah", "P Web 2");
echo $dosen1->getNama();

?>