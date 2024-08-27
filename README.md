# PWEB 2
# Modul 1
 <h3>Jobsheet 1</h3>
 <h4>1. Membuat Class dan Object</h4>
 <p>-Definisi class Mahasiswa</p>
     
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
    
 <p>-Metode tampilkanData</p>

    //method atau fungsi untuk tampil data
    public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

  <p>metode ini digunakan untuk menampilkan data</p>

  <p>-Instansiasi Object</p>

    $mahasiswa = new Mahasiswa();

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>

    $mahasiswa->nama = "rina";
    $mahasiswa->nim = "230102021";
    $mahasiswa->jurusan = "jkb";

<p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>
<p>-Berikut full kodenya</p>

      <?php
      //definisi class
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
      }
      //instansiasi objek
      $mahasiswa = new Mahasiswa();
      $mahasiswa->nama = "rina";
      $mahasiswa->nim = "230102021";
      $mahasiswa->jurusan = "jkb";

      //menampilkan isi hasil data dari method tampilkanData
      echo $mahasiswa->tampilkanData();
      ?>
      
<p>-Berikut Output yang dihasilkan</p>

![Screenshot (392)](https://github.com/user-attachments/assets/c1abb460-a941-44ed-90ae-c56d4a63d26a)

  -------------------------------------------------------------------------
<h4>2. Implementasi Constructor</h4>
 <p>-Definisi class Mahasiswa</p>
     
    class Mahasiswa {
      /*atribut atau properties untuk menyimpan
       data atau keadaan dari objek*/
      public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
      public $nim;
      public $jurusan;

      public function  __construct($nama, $nim, $jurusan){
      $this->nama = $nama;
      $this->nim = $nim;
      $this->jurusan = $jurusan;
      }

       //method atau fungsi untuk tampil data
       public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }
    
 <p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>

<p>-Menambahkan metode constructor</p>

    //constructor untuk menginisialisasi atribut atau preoperty
    public function  __construct($nama, $nim, $jurusan){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

 <p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class mahasiswa diinstansiasi(dibuat sebuah object).<br>
 Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nim, dan jurusan, dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class mahasiswa, yaitu property nama, nim, dan jurusan</p>

  <p>-Metode tampilkanData</p>

     //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
     }

  <p>metode ini digunakan untuk menampilkan data</p>

  <p>-Instansiasi Object</p>

     $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>-Berikut full kodenya</p>

    <?php
    //definisi class
    class Mahasiswa {
        /*atribut atau properties untuk menyimpan
        data atau keadaan dari objek*/
        public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
        public $nim;
        public $jurusan;

        //constructor untuk menginisialisasi atribut atau preoperty
        public function  __construct($nama, $nim, $jurusan){
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
        }

         //method atau fungsi untuk tampil data
         public function tampilkanData(){
            return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
        }
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>

<p>Berikut Output yang dihasilkan</p>

![Screenshot 2024-08-27 222059](https://github.com/user-attachments/assets/c75235af-fd8d-41d2-904a-6d6c2cc22a32)

------------------------------------------------------------------------
<h4>3. Membuat Metode Tambahan</h4>
 <p>-Definisi class Mahasiswa</p>
     
    //definisi class
    class Mahasiswa {
       /*atribut atau properties untuk menyimpan
        data atau keadaan dari objek*/
       public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
       public $nim;
       public $jurusan;
   
       //constructor untuk menginisialisasi atribut atau preoperty
       public function  __construct($nama, $nim, $jurusan){
       $this->nama = $nama;
       $this->nim = $nim;
       $this->jurusan = $jurusan;
       }
   
        //method atau fungsi untuk tampil data
        public function tampilkanData(){
           return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this-    >jurusan";
       }
   
       //method atau fungsi untuk mengupdate jurusan
       public function updateJurusan($jurusanNew){
           $this->jurusan = $jurusanNew;
       }
    }

<p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>
  
  <p>-Metode updateJurusan</p>

    //method atau fungsi untuk mengupdate jurusan
    public function updateJurusan($jurusanNew){
        $this->jurusan = $jurusanNew;
    }

  <p>Metode ini digunakan untuk mengubah jurusan dari objek yang sudah dibuat. Variable $jurusanNew merupakan tempat untuk nilai atau value dari jurusan baru</p>

   <p>-Instansiasi Object</p>

     $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //untuk mengupdate jurusan 
    $mahasiswa->updateJurusan("ti");

 <p>Kode ini untuk memanggil method updateJurusan dan mengubah isi pada property jurusan yang sudah di isi sebelumnya dari "jkb" menjadi "ti"</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>-Berikut full kodenya</p>

    <?php
    //definisi class
    class Mahasiswa {
        /*atribut atau properties untuk menyimpan
         data atau keadaan dari objek*/
        public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
        public $nim;
        public $jurusan;
    
        //constructor untuk menginisialisasi atribut atau preoperty
        public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        }
    
         //method atau fungsi untuk tampil data
         public function tampilkanData(){
            return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
        }
    
        //method atau fungsi untuk mengupdate jurusan
        public function updateJurusan($jurusanNew){
            $this->jurusan = $jurusanNew;
        }
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");
    
    //untuk mengupdate jurusan 
    $mahasiswa->updateJurusan("ti");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>


   










