# PPWEB 2
# JOBSHEET 1
  <h3>Jobsheet</h3>
  <h4>1. Membuat Class dan Object</h4>
  <p>Definisi class Mahasiswa</p>
     
      class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;

     //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }
    
<p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>

<h3>Property atau Atributte</h3>

    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;
    
<p>Property atau atributte adalah variabel yang dimiliki class yang dapat menyimpan data atau keadaan dari object. Property diatas memiliki aksesbilitas public dimana dapat diakses dari mana saja. </p>

<h3>Method atau Function</h3>

      //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

<p>Method adalah fungsi yang ditentukan dalam class yang dapat dipanggil oleh object, dimana object nanti bisa mengakses method melalui class.</p>

<h3></h3>










