<?php

//Aginda Dufira
//121140058
//Tugas Praktikum 7 Pemweb

// Membuat class DataDiri
class identitas {
    private $nama;
    private $umur;
    private $alamat;

    // Constructor untuk menginisialisasi property
    public function __construct($nama, $umur, $alamat) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
    }

    // Method untuk menampilkan data diri
    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    // Method untuk mengubah data diri
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    // Method untuk menampilkan identitas
    public function tampilkanidentitas() {
        echo "Nama: {$this->nama}\n <br>";
        echo "Umur: {$this->umur}\n <br>";
        echo "Alamat: {$this->alamat}\n <br>";
    }
}

// Membuat objek dari class identitas
$identitas1 = new identitas("Nicko", 20, "Jl. Pramuka");

// Menampilkan identitas awal
$identitas1->tampilkanidentitas();

// Mengubah alamat
$identitas1->setAlamat("Jl. Kenanga");

// Menampilkan identitas setelah diubah
$identitas1->tampilkanidentitas();

?>
