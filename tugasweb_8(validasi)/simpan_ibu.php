<?php
session_start();
include 'koneksi.php';

// Melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $namaibu = $_POST['namaibu'];
    $thnlahiribu = $_POST['thnlahiribu'];
    $pendidikanIb = $_POST['pendidikanIb'];
    $pekerjaanIb = $_POST['pekerjaanIb'];
    $penghasilanIb  = $_POST['penghasilanIb'];
    $kebutuhanIb = $_POST['kebutuhanIb'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO tbl_ibu (namaibu, thnlahiribu, pendidikanIb, pekerjaanIb, penghasilanIb , kebutuhanIb) VALUES ('$namaibu', '$thnlahiribu', '$pendidikanIb', '$pekerjaanIb', '$penghasilanIb', '$kebutuhanIb')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";

        header("refresh:1; url=tampildata.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
