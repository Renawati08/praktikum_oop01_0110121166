<?php

//cara buat class
class Mahasiswa{
    //cara membuat property (variabel)
    public $nama = "Renawati";
    public $alamat = "Tangerang";
    public $jurusan = "Sistem Informasi";

    //cara membuat method (fungsi)
    function CekNama(){
        echo "Nama saya adalah : " . $this->nama;
    }

    //function __construct($datanama, $dataalamat, $datajurusan)
    //{
        // $this->nama =$datanama;
        // $this->alamat =$dataalamat;
        // $this->jurusan =$datajurusan;
    }
//}

//cara membuat object
$mahasiswa1 = new Mahasiswa();

//cara akses property
//echo $mahasiswa1->nama;

echo "<br>";

//cara akses method
$mahasiswa1->CekNama();
?>