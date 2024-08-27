<?php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $mataKuliah;
    }

    public function tampilkanDosen(){
        return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah";
    }
}

$dosen = new Dosen("rina", "1234", "rpl");
echo $dosen->tampilkanDosen();
?>