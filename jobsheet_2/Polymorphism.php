<?php
class Pengguna {

    public function __construct(){
    }
    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "akses web";
    }
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
$tampil = [new Pengguna(), new Dosen(), new Mahasiswa()];
foreach ($tampil as $lihat){
    echo $lihat->aksesFitur();
    echo "<br>";
}

?>