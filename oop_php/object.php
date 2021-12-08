<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;
}

# Membuat Object 1
$azzam = new Person();
$azzam->nama = "Muhammad Azzam Nur Alwi Mansyur";
$azzam->alamat = "Jakarta Selatan";
$azzam->jurusan = "Teknik Informatika";
echo $azzam->nama;
echo "<br>";
echo $azzam->alamat;
echo "<br>";
echo $azzam->jurusan;

echo "<br>";
echo "<br>";

# Membuat Object 2
$lovina = new Person();
$lovina->nama = "Lovina Aulia";
$lovina->alamat = "Jakarta Selatan";
$lovina->jurusan = "Ilmu Komunikasi";
echo $lovina->nama;
echo "<br>";
echo $lovina->alamat;
echo "<br>";
echo $lovina->jurusan;
