<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav>
    <h1 class="text-center">Data Peserta</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Jenis Pendaftaran</th>
                            <th>Tanggal Masuk Sekolah</th>
                            <th>NIS</th>
                            <th>Nomor Peserta Ujian</th>
                            <th>Apakah Pernah PAUD</th>
                            <th>Apakah Pernah TK</th>
                            <th>No. Seri SKHUN Sebelumnya</th>
                            <th>No. Seri Ijazah Sebelumnya</th>
                            <th>Hobi</th>
                            <th>Cita-cita</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $registrasi = mysqli_query($conn, "SELECT * FROM tbl_registrasi");
                    foreach ($registrasi as $row) {
           
                echo "<tr>
                    <td>" . $row['jenis_pendaftaran'] . "</td>
                    <td>" . $row['tglmasuksekolah'] . "</td>
                    <td>" . $row['nis'] . "</td>
                    <td>" . $row['nopeserta_ujian'] . "</td>
                    <td>" . $row['paud'] . "</td>
                    <td>" . $row['tk'] . "</td>
                    <td>" . $row['SKHUN'] . "</td>
                    <td>" . $row['ijazah'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                    <td>" . $row['cita_cita'] . "</td>
                <tr>";
                      
                    }
                    ?>
                    </table>
                </div>
        </div>
        <div class="card-header bg-primary text-white">
            DATA PRIBADI
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Berkebutuhan Khusus</th>
                            <th>Alamat Jalan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nama Dusun</th>
                            <th>Nama Kelurahan/Desa</th>
                            <th>Kecamatan</th>
                            <th>Kode Pos</th>
                            <th>Tempat Tinggal</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM tbl_pribadi");
                    foreach ($datapribadi as $row) {
           

                echo "<tr>
                    <td>" . $row['namalengkap'] . "</td>
                    <td>" . $row['jk'] . "</td>
                    <td>" . $row['nisn'] . "</td>
                    <td>" . $row['nik'] . "</td>
                    <td>" . $row['tempatlahir'] . "</td>
                    <td>" . $row['tgllahir'] . "</td>
                    <td>" . $row['agama'] . "</td>
                    <td>" . $row['kebutuhan_khusus'] . "</td>
                    <td>" . $row['alamat'] . "</td>
                    <td>" . $row['rt'] . "</td>
                    <td>" . $row['rw'] . "</td>
                    <td>" . $row['namadusun'] . "</td>
                    <td>" . $row['namadesa'] . "</td>
                    <td>" . $row['kecamatan'] . "</td>
                    <td>" . $row['kdpos'] . "</td>
                    <td>" . $row['tempattinggal'] . "</td>
                <tr>";

                    }
                    ?>
                    </table>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Moda Transportasi</th>
                    <th>Nomor HP</th>
                    <th>Nomor Telepon</th>
                    <th>E-mail Pribadi</th>
                    <th>Penerima KPS/PKH/KIP</th>
                    <th>No.KPS/KK/PKH/KIP</th>
                    <th>Kewarganegaraan</th>
                    <th>Nama Negara</th>

                </tr>
                <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM tbl_pribadi");
                    foreach ($datapribadi as $row) {
            
                echo "<tr>
                <td>" . $row['transportasi'] . "</td>
                    <td>" . $row['nohp'] . "</td>
                    <td>" . $row['notelp'] . "</td>
                     <td>" . $row['email'] . "</td>
                    <td>" . $row['penkip'] . "</td>
                    <td>" . $row['nokip'] . "</td>
                  <td>" . $row['kwn'] . "</td>
                   <td>" . $row['negara'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA AYAH KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ayah Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ayahkandung = mysqli_query($conn, "SELECT * FROM tbl_ayah");
                    foreach ($ayahkandung as $row) {
           
                echo "<tr>
                    <td>" . $row['namaayah'] . "</td>
                    <td>" . $row['thnlahirayah'] . "</td>
                    <td>" . $row['pendidikanAy'] . "</td>
                    <td>" . $row['pekerjaanAy'] . "</td>
                    <td>" . $row['penghasilanAy'] . "</td>
                    <td>" . $row['kebutuanAy'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA IBU KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ibukandung = mysqli_query($conn, "SELECT * FROM tbl_ibu");
                    foreach ($ibukandung as $row) {
                echo "<tr>
                    <td>" . $row['namaibu'] . "</td>
                    <td>" . $row['thnlahiribu'] . "</td>
                    <td>" . $row['pendidikanIb'] . "</td>
                    <td>" . $row['pekerjaanIb'] . "</td>
                    <td>" . $row['penghasilanIb'] . "</td>
                    <td>" . $row['kebutuhanIb'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>

</body>

</html>