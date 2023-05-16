<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.warning {color : #FF0000;}
		.hitam{
			background-color: black;
			color: white;
		}
		.tengah{
			width: 150%;
			margin-left: 180px;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="tengah">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<h1 style="text-align: center;">Formulir Peserta Didik</h1><br>
		</div>
		<div class="card-body">
			<form method="POST" action="simpan_pribadi.php">
				

				<!-- Data Pribadi -->
				<div class="hitam">Data Pribadi</div>
				<!-- Nama Lengkap -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="namalengkap" class="form-control"  placeholder="Nama Lengkap" required="">
					</div>
				</div>
				<!-- Jenis Kelamin -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<input type="radio" name="jk" value="laki-laki" required=""> Laki - laki
						<input type="radio" name="jk" value="perempuan" required=""> Perempuan
					</div>
				</div>
				<!-- NISN -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NISN</label>
					<div class="col-sm-10">
						<input type="number" name="nisn" class="form-control"  placeholder="NISN" required="">
					</div>
				</div>
				<!-- NIK -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="number" name="nik" class="form-control"  placeholder="NIK" required="">
					</div>
				</div>
				<!-- Tempat Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="tempatlahir" class="form-control"  placeholder="Tempat Lahir" required="">
					</div>
				</div>
				<!-- Tanggal Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="tgllahir" class="form-control" required="">
					</div>
				</div>
				<!-- Agama -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-10">
						<select name="agama" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Islam">Islam</option>
							<option value="Kristen Protestan">Kristen Protestan</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Khong Hu Chu">Khong Hu Chu</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div> 
				<!-- Berkebutuhan Khusus Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="kebutuhan_khusus" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Alamat Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Jalan</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control"  placeholder="Alamat" required="">
					</div>
				</div>
				<!-- RT -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RT</label>
					<div class="col-sm-10">
						<input type="text" name="rt" class="form-control"  placeholder="RT" required="">
					</div>
				</div>
				<!-- RW -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RW</label>
					<div class="col-sm-10">
						<input type="text" name="rw" class="form-control"  placeholder="RW" required="">
					</div>
				</div>
				<!-- Nama Dusun -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Dusun</label>
					<div class="col-sm-10">
						<input type="text" name="namadusun" class="form-control"  placeholder="Nama Dusun" required="">
					</div>
				</div>
				<!-- Nama Kelurahan/Desa -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
					<div class="col-sm-10">
						<input type="text" name="namadesa" class="form-control"  placeholder="Nama Kelurahan/Desa" required="">
					</div>
				</div>
				<!-- Kecamatan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kecamatan</label>
					<div class="col-sm-10">
						<input type="text" name="kecamatan" class="form-control"  placeholder="Kecamatan" required="">
					</div>
				</div>
				<!-- Kode Pos -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kode Pos</label>
					<div class="col-sm-10">
						<input type="text" name="kdpos" class="form-control"  placeholder="Kode Pos" required="">
					</div>
				</div>
				<!-- Tempat Tinggal -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-10">
						<select name="tempattinggal" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Bersama Orangtua">Bersama Orangtua</option>
							<option value="Wali">Wali</option>
							<option value="Kos">Kos</option>
							<option value="Asrama">Asrama</option>
							<option value="Panti Asuhan">Panti Asuhan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Moda Transportasi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Moda Transportasi</label>
					<div class="col-sm-10">
						<select name="transportasi" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Jalan kaki">Jalan kaki</option>
							<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
							<option value="Kendaraan Umum">Kendaraan Umum</option>
							<option value="Jemputan Sekolah">Jemputan Sekolah</option>
							<option value="Kereta Api">Kereta Api</option>
							<option value="Ojek">Ojek</option>
							<option value="Dokar/Becak">Dokar/Becak</option>
							<option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Nomor HP -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Handphone</label>
					<div class="col-sm-10">
						<input type="number" name="nohp" class="form-control"  placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Nomor Telepon -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Telepon</label>
					<div class="col-sm-10">
						<input type="number" name="notelp" class="form-control"   placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Email -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email Pribadi</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control"  placeholder="Email" required="">
					</div>
				</div>
				<!-- Penerima KPS/KIP/PKH -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penerima KPS/KIP/PKH</label>
					<div class="col-sm-10">
						<input type="radio" name="penkip" value="Ya" required=""> Ya
						<input type="radio" name="penkip" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- No. KPS/KIP/PKH/KKS -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. KPS/KIP/PKH/KKS</label>
					<div class="col-sm-10">
						<input type="number" name="nokip" placeholder="No. KPS/KIP/PKH/KKS" > <i>*)Apabila Menerima</i>
					</div>
				</div>
				<!-- Kewarganegaraan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-10">
						<input type="radio" name="kwn" value="Indonesia(WNI)" required=""> Indonesia(WNI)
						<input type="radio" name="kwn" value="Asing(WNA)" required=""> Asing(WNA)
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" id="negaraField" style="display: none;">Nama Negara</label>
					<div class="col-sm-10">
						<input type="text" name="negara" class="form-control"  placeholder="Masukkan Nama Nagara" required="">
					</div>
				</div>

			  <script>
                  function toggleNegaraField() {
                    var negaraField = document.getElementById("negaraField");
                    var radio = document.querySelector('input[name="kwn"]:checked');

                    if (radio.value === "tidak") {
                      negaraField.style.display = "table-row";
                    } else {
                      negaraField.style.display = "none";
                    }
                  }
                </script>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit"  class="btn btn-primary"onclick="tampilkanPesan()">next</button>

						 <script>
        function tampilkanPesan() {
          var konfirmasi = confirm("Apakah Data yang Dimasukkan Sudah Benar?");
          if (konfirmasi) {
            alert("Data berhasil disimpan.");
          } else {
            alert("Silakan periksa kembali data Anda.");
          }
        }
        </script>
						
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>
	
</body>
</html>