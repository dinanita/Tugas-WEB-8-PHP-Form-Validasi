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
    $namaayah = $_POST['namaayah'];
    $thnlahirayah = $_POST['thnlahirayah'];
    $pendidikanAy = $_POST['pendidikanAy'];
    $pekerjaanAy = $_POST['pekerjaanAy'];
    $penghasilanAy = $_POST['penghasilanAy'];
    $kebutuanAy = $_POST['kebutuanAy'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO  tbl_ayah (namaayah, thnlahirayah, pendidikanAy, pekerjaanAy, penghasilanAy, kebutuanAy ) VALUES ('$namaayah', '$thnlahirayah', '$pendidikanAy', '$pekerjaanAy', '$penghasilanAy', '$kebutuanAy')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
        // Mengarahkan ke halaman selanjutnya setelah 3 detik
            header("refresh:3; url=data_ibu.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
