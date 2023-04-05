<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal_PMB</title>
	<!-- css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">

</head>

<body>
	<nav class="navbar fixed-top" style="background-color:#285430;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="font-family:comic-sans; color:white;">SIA - Unwaha</a>
		</div>
	</nav>
	<br><br><br>
	<div class="container p-3 my-3 border">
		<h1 class="text-center">Form Pendaftaran Mahasiswa baru</h1>

		<form action="<?=base_url('dashboard/tambah')?>" method="post">
			<div class="alert alert-primary">
				<strong>Data Diri</strong>
			</div>
			<div class="row">
				<div class="col-sm-7">

					<div class="form-group">
						<label>Nama Lengkap:</label>
						<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Nomor Induk Kependudukan (NIK):</label>
						<input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tempat Lahir:</label>
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>Tanggal Lahir:</label>
						<input type="date" name="tanggal_lahir" class="form-control">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Jenis Kelamin:</label>
						<select class="form-control" name="gender">
							<option>Pilih</option>
							<option value="1">Laki-laki</option>
							<option value="2">Perempuan</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-4">
					<div class="form-group">
						<label>Kewarganegaraan:</label>
						<select class="form-control" name="warganegara">
							<option>Pilih</option>
							<option value="WNI">Warga Negara Indonesia</option>
							<option value="WNA">Warga Negara Asing</option>
						</select>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>Agama:</label>
						<select class="form-control" name="agama">
							<option>Pilih</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Nama Ibu Kandung:</label>
						<input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Masukan Email">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>No Telp:</label>
						<input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
					</div>
				</div>
			</div>
			<br>
			<div class="alert alert-primary">
				<strong>Data Alamat Asal</strong>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<div class="form-group">
						<label>Alamat:</label>
						<textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Provinsi:</label>
							<input class="form-control" name="provinsi" id="provinsi">

							</input>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Kabupaten:</label>
							<input class="form-control" name="kabupaten" id="kabupaten">
							<!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
							</input>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Kecamatan:</label>
							<input class="form-control" name="kecamatan" id="kecamatan">
							<!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
							</input>
						</div>
					</div>
				</div>
				<br>
				<br><br><br>
				<br>
				<div class="alert alert-primary">
					<strong>Data Pendidikan</strong>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Pendidikan Terakhir:</label>
							<select class="form-control" name="pendidikan">
								<option value="Pilih">Pilih</option>
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="MA">MA</option>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Sekolah:</label>
							<input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Rata-rata Nilai Rapor Kelas 12:</label>
							<input type="text" id="nilai_raport" name="nilai_raport" class="form-control"
								placeholder="Masukan Rata-rata nilai raport">
						</div>
					</div>
				</div>
				<br><br><br>
				<div class="alert alert-primary">
					<strong>Pilihan Program Studi</strong>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Pilih Program Studi 1:</label>
							<select class="form-control" id="prodi1" name="prodi1">
								<option value="Pilih">Pilih</option>
								<option value="S1- Pendidikan Agama Isalam">S1- Pendidikan Agama Isalam</option>
								<option value="S1- Pendidikan Bahasa Arab">S1- Pendidikan Bahasa Arab</option>
								<option value="S1- Pendidikan Bahasa Inggris">S1- Pendidikan Bahasa Inggris</option>
								<option value="S1- Pendidikan Biologi">S1- Pendidikan Biologi</option>
								<option value="S1- Pendidikan Matematika">S1- Pendidikan Matematika</option>
								<option value="S1- Pendidikan Fisika">S1- Pendidikan Fisika</option>
								<option value="S1- Manajemen">S1- Manajemen</option>
								<option value="S1- Informatika">S1- Informatika</option>
								<option value="S1- Sistem Informasi">S1- Sistem Informasi</option>
								<option value="S1- teknologi Hasil Pertanian">S1- Teknologi Hasil Pertanian</option>
								<option value="S1- Ekonomi Syari'ah">S1- Ekonomi Syari'ah</option>
								<option value="S1- Agribisnis">S1- Agribisnis</option>
								<option value="S1- Agroekoteknologi">S1- Agroekoteknologi</option>
								<option value="S1- Rekayasa Pertanian & Biosistem">S1- Rekayasa Pertanian & Biosistem
								</option>

							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Pilih Program Studi 2:</label>
							<select class="form-control" id="prodi2" name="prodi2">
								<option value="Pilih">Pilih</option>
								<option value="S1- Pendidikan Agama Isalam">S1- Pendidikan Agama Isalam</option>
								<option value="S1- Pendidikan Bahasa Arab">S1- Pendidikan Bahasa Arab</option>
								<option value="S1- Pendidikan Bahasa Inggris">S1- Pendidikan Bahasa Inggris</option>
								<option value="S1- Pendidikan Biologi">S1- Pendidikan Biologi</option>
								<option value="S1- Pendidikan Matematika">S1- Pendidikan Matematika</option>
								<option value="S1- Pendidikan Fisika">S1- Pendidikan Fisika</option>
								<option value="S1- Manajemen">S1- Manajemen</option>
								<option value="S1- Informatika">S1- Informatika</option>
								<option value="S1- Sistem Informasi">S1- Sistem Informasi</option>
								<option value="S1- teknologi Hasil Pertanian">S1- Teknologi Hasil Pertanian</option>
								<option value="S1- Ekonomi Syari'ah">S1- Ekonomi Syari'ah</option>
								<option value="S1- Agribisnis">S1- Agribisnis</option>
								<option value="S1- Agroekoteknologi">S1- Agroekoteknologi</option>
								<option value="S1- Rekayasa Pertanian & Biosistem">S1- Rekayasa Pertanian & Biosistem
								</option>
							</select>
						</div>
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-primary">Daftar</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
					</div>

				</div>
		</form>
	</div>
</div>
	<br><br><br>
	<footer class="text-center text-white">
		<!-- Grid container -->
		<div class="container p-4"></div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color:black;">
			© 2023 Copyright:
			<a class="text-white">SIA UNWAHA</a>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php
// ambil nilai dari flashdata 'success' atau 'error' untuk ditampilkan dalam SweetAlert 2
if ($this->session->flashdata('success')) {
    $message = $this->session->flashdata('success');
    echo "
        <script>
            Swal.fire('Berhasil!', '$message', 'success');
        </script>
    ";
} elseif ($this->session->flashdata('error')) {
    $message = $this->session->flashdata('error');
    echo "
        <script>
            Swal.fire('Error!', '$message', 'error');
        </script>
    ";
}
?>
</body>

</html>
