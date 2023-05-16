<?php
session_start();
include 'koneksi.php';

// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");
// Periksa koneksi
if ($koneksi ->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}



// Tangkap data dari formulir
$namalengkap = $_POST['namalengkap'];
$jk = $_POST['jk'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$agama = $_POST['agama'];
$kebutuhan_khusus = $_POST['kebutuhan_khusus'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$namadusun = $_POST['namadusun'];
$namadesa = $_POST['namadesa'];
$kecamatan = $_POST['kecamatan'];
$kdpos = $_POST['kdpos'];
$tempattinggal = $_POST['tempattinggal'];
$transportasi = $_POST['transportasi'];
$nohp  = $_POST['nohp'];
$notelp  = $_POST['notelp'];
$email = $_POST['email'];
$penkip = $_POST['penkip'];
$nokip = $_POST['nokip'];
$kwn= $_POST['kwn'];
$negara = $_POST['negara'];

// Query untuk memasukkan data ke tabel "data_pribadi"
$sql = "INSERT INTO tbl_pribadi (namalengkap, jk, nisn, nik, tempatlahir, tgllahir, agama, kebutuhan_khusus, alamat, rt, rw, namadusun, namadesa, kecamatan, kdpos, tempattinggal, transportasi, nohp, notelp, email, penkip, nokip, kwn, negara)
        VALUES ('$namalengkap', '$jk', '$nisn', '$nik', '$tempatlahir', '$tgllahir', '$agama', '$kebutuhan_khusus', '$alamat', '$rt', '$rw', '$namadusun', '$namadesa', '$kecamatan', '$kdpos', '$tempattinggal', '$transportasi', '$nohp', '$notelp', '$email', '$penkip', '$nokip', '$kwn', '$negara')";

// Jalankan query untuk memasukkan data
if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    // Mengarahkan ke halaman selanjutnya setelah 3 detik
    header("refresh:1; url=data_ayah.php");
    exit(); // Memastikan tidak ada output tambahan sebelum redirect
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $koneksi->error;
}


$koneksi->close();
?>
