# PPWEB 2
# JOBSHEET 1
  <h2>Membuat Class dan Object</h2>
  <h3>Definisi class</h3>
     
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
<p>Kelas(class) adalah struktur atau blueprint yang mendefinisikan atribut(property) dan fungsi(method) yang diliki oleh object. Di dalam class terdapat property dan method, jadi class harus dibuat terlebih dahulu sebelum membuat object
</p>

<h3>Property atau Atributte</h3>

    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;
    
<p>Property atau atributte adalah variabel yang dimiliki class yang dapat menyimpan data atau keadaan dari object. Property diatas memiliki aksesbilitas public dimana dapat diakses dari mana saja. </p>







