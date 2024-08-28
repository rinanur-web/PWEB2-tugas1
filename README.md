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

  <p>Berikut Output yag dihasilkan</p>

  -----------------------------------------------------------------------
 <h4>4. Penggunaan Atribut dan Metode</h4>
 <p>-Definisi class Mahasiswa</p>
     
    //definisi class
    class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
       public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
       public $nim;
       public $jurusan;

 <p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu 
    $nama, $nim, $jurusan</p>

 <p>-Metode Setter</p>

    //method atau fungsi untuk setter nim
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

  <p>Metode setter ini akan mengatur nilai property nim dari objek mahasiswa</p>
  
  <p>-Instansiasi Object</p>

     $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

     //untuk men set nilai property ($nama_object->nama_property=nilai)
     $mahasiswa->setNim("123");

  <p>Kode diatas akan memanggil metode setNim pada objek $mahasiswa dan menetapkan nilai "123" sebagail nilai dari property nim</p>
  
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>Berikut full kodenya </p>

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
   
        //method atau fungsi untuk setter nim
        public function setNim($nimBaru){
           $this->nim = $nimBaru;
       }
   
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("rina", "230102021", "jkb");
    
    //untuk men set nilai property ($nama_object->nama_property=nilai)
    $mahasiswa->setNim("123");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>


<p>Berikut Output hasilnya</p>

-------------------------------------------------------------------------
<h3>Tugas Modul 1</h3>
<p>Definisi class</p>

       //definisi class
       class Dosen {
          /*atribut atau properties untuk menyimpan
           data atau keadaan dari objek*/
          public $nama;
          public $nip; //aksesbilitas PUBLIC dapat diakses dari mana saja
          public $mataKuliah;
        }

 <p>Class Dosen : Di class ini memiliki tiga property yaitu nama, nip, dan mataKuliah</p>

    //constructor untuk menginisialisasi atribut atau property
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
<p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class dosen diinstansiasi(dibuat sebuah object).<br>
 Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nip, dan mataKuliah dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class dosen, yaitu property nama, nip, dan mataKuliah</p>

    //method atau fungsi untuk tampil data
    public function tampilkanDosen(){
        return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah";
    }
    
  <p>public function tampilkanDosen(): Metode ini untuk mendefinisikan tampilDosen yang dapat diakses secara publik dan tidak mnerima parameter. <br>
   return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah"; : Bagian ini mengembalikan string yang berisi data dari property $nama, $nip, $mataKuliah dari objek
  </p>

     //instansiasi objek
     $dosen = new Dosen("rina", "1234", "rpl");

 <p><p>Object : $dosen adalah objek yang merupakan instansiasi dari kelas dosen.</p>
  <p>Pada objek yang baru dibuat yaitu $dosen memberikan nilai atau value pada setiap property yang ada pada kelas dosen</p>
  
     //menampilkan hasil atau output
     echo $dosen->tampilkanDosen(); //output: Nama: rina, NIP: 1234, mata  kuliah: rpl

 <p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

 <p>Berikut full kodenya</p>

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

  <p>Berikut Output hasilnya</p>
  ----------------------------------------------------------------------------------------------
  #Modul 2
  <h3>1. Membuat class dan object</h3>
  <p>Definisi class</p>
  
   
      
    
        
    
       
    
    
    
    
    
    
    
    
    
    
