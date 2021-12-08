<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;

    function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # Membuat Method
    function setNama($data) # Setter
    {
        $this->nama = $data;
    }
    function getNama() # Getter
    {
        return $this->nama;
    }

    # Buat Setter dan Getter untuk Alamat
    function setAlamat($data)
    { # Setter
        $this->alamat = $data;
    }
    function getAlamat()
    { #Getter
        return $this->alamat;
    }

    # Buat Setter dan Getter untuk Jurusan
    function setJurusan($data)
    { # Setter
        $this->jurusan = $data;
    }
    function getJurusan()
    { #Getter
        return $this->jurusan;
    }
}

# Membuat Object 1
$azzam = new Person("Muhammad Azzam Nur Alwi Mansyur", "Bogor", "Teknik Informatika");
echo $azzam->getNama();
echo "<br>";
echo $azzam->getAlamat();
echo "<br>";
echo $azzam->getJurusan();

echo "<br>";
echo "<br>";

# Membuat Object 2
$lovina = new Person("Lovina Aulia", "Jakarta Selatan", "Ilmu Komunikasi");
echo $lovina->getNama();
echo "<br>";
echo $lovina->getAlamat();
echo "<br>";
echo $lovina->getJurusan();
