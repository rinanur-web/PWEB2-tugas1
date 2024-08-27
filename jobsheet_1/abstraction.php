<?php
abstract class Pengguna {
    public function __construct(){
    }
    abstract public function aksesFitur();
}

class Dosen extends Pengguna {
    public function __construct(){
    }
    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Fitur Masukan Nilai";
    }
}

class Mahasiswa extends Pengguna {
    public function __construct(){
    }
    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Fitur lihat nilai";
    }
}

// instansi objek dari class dosen dan mahasiswa
$dosen = new Dosen();
echo $dosen->aksesFitur() . "<br>";

$mahasiswa = new Mahasiswa();
echo $mahasiswa->aksesFitur();


?>