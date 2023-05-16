<?php
session_start();

include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Proses simpan data ke dalam tabel "registrasi"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_pendaftaran = $_POST["jenis_pendaftaran"];
    $tglmasuksekolah = $_POST["tglmasuksekolah"];
    $nis = $_POST["nis"];
    $nopeserta_ujian = $_POST["nopeserta_ujian"];
    $paud = $_POST["paud"];
    $tk = $_POST["tk"];
    $SKHUN = $_POST["SKHUN"];
    $ijazah = $_POST["ijazah"];
    $hobi = $_POST["hobi"];
    $cita_cita = $_POST["cita_cita"];

    // Query untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO tbl_registrasi (jenis_pendaftaran, tglmasuksekolah, nis, nopeserta_ujian, paud, tk, SKHUN, ijazah, hobi, cita_cita)
              VALUES ('$jenis_pendaftaran', '$tglmasuksekolah', '$nis', '$nopeserta_ujian', '$paud', '$tk', '$SKHUN', '$ijazah', '$hobi', '$cita_cita')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika simpan data berhasil, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Data berhasil disimpan.";
        // Mengarahkan ke halaman selanjutnya setelah 3 detik
        header("refresh:1; url=data_pribadi.php");
    } else {
        // Jika simpan data gagal, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
