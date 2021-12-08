<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;

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
$azzam = new Person();
$azzam->setNama("Muhammad Azzam Nur Alwi Mansyur");
$azzam->setAlamat("Jakarta Selatan");
$azzam->setJurusan("Teknik Informatika");
echo $azzam->getNama();
echo "<br>";
echo $azzam->getAlamat();
echo "<br>";
echo $azzam->getJurusan();

echo "<br>";
echo "<br>";

# Membuat Object 2
$lovina = new Person();
$lovina->setNama("Lovina Aulia");
$lovina->setAlamat("Jakarta Selatan");
$lovina->setJurusan("Ilmu Komunikasi");
echo $lovina->getNama();
echo "<br>";
echo $lovina->getAlamat();
echo "<br>";
echo $lovina->getJurusan();
