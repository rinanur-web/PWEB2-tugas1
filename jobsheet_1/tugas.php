<?php
//definisi class
class Dosen {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama;
    public $nip; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $mataKuliah;
 
     //constructor untuk menginisialisasi atribut atau property
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //method atau fungsi untuk tampil data
    public function tampilkanDosen(){
        return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah";
    }
}
//instansiasi objek
$dosen = new Dosen("rina", "1234", "rpl");
//menampilkan hasil atau output
echo $dosen->tampilkanDosen(); //output: Nama: rina, NIP: 1234, mata kuliah: rpl
?>