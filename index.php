<?php 
require_once "modul/modul.php"; 
getErrorLogin();
?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  	<script src="plugin/jquery-3.5.1.min.js"></script>
  	<script src="plugin/popper-1.16.0.min.js"></script>
  	<script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

<!-- w3school online 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
-->

</head>

<body style="background-color:#343A40;">

	<div class="container-fluid p-3 bg-dark text-white">
		<div class="row">
			<div class="col-10">
				<h1>PERPUSTAKAAN UMUM</h1>
				<p>Jl. Lembah Abang No 11, Telp: (021)55555555</p>	
			</div>
			<div class="col-2">
				<img src="images/logo-perpustakaan3.png" class="float-right" alt="perpus" width="120" height="120">
			</div>
		</div>
	</div>

	<div class="container-fluid p-2 bg-danger text-white">
		<div class="row">
			<div class="col-10">Vocational School Graduate Academy | VSGA</div>
			<div class="col-2"><span class="text-center">Hai <?php echo$_SESSION['sesi']; ?>!</span>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="container-fluid p-2 bg-dark">
		<span class="text-white float-left">Aktifitas Anda:&nbsp;&nbsp;</span> 
		<div class="btn-group">
			<a href="index.php?p=beranda" class="btn btn-outline-danger text-white" active>Beranda</a>
			
			<div class="btn-group">
				<button type="button" class="btn btn-outline-danger text-white dropdown-toggle" id="dropdownDataMaster" data-toggle="dropdown" area-expanded="false">Data MASTER</button>
				<div class="dropdown-menu" aria-labelledby="dropdownDataMaster">
					<h6 class="dropdown-header">Menu Untuk Data MASTER</h6>	
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="index.php?p=anggota">Data Anggota</a>
					<a class="dropdown-item" href="index.php?p=buku">Data Buku</a>
					<div class="dropdown-divider"></div>
					<span class="dropdown-item-text"><h6><small>Siswa diharapkan dapat membuat CODINGAN pada Menu <mark>Data Buku.</mark></small></h6></span>
				</div> 
			</div>

			<div class="btn-group">
				<button type="button" class="btn btn-outline-danger text-white dropdown-toggle" data-toggle="dropdown" id="dopdownDataTransaksi">Data TRANSAKSI</button>
				<div class="dropdown-menu">
					<h6 class="dropdown-header">Aktifitas TRANSAKSI PENGGUNA</h6>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
					<a class="dropdown-item" href="index.php?p=transaksi-pengembalian">Transaksi Pengembalian</a>
					<div class="dropdown-divider"></div>
					<span class="dropdown-item-text">
					<h6><small> Siswa dapat membuat CODING untuk Proses Transaki Peminjaman dan Pengembalian Buku
					</small></h6>
					</span>
				</div>
			</div>
			<a href="index.php?p=laporan-transaksi" class="btn btn-outline-danger text-white">Laporan TRANSAKSI</a>
			<a href="logout.php" class="btn btn-outline-danger text-white">Logout</a>
		</div>		
	</div>

	<div class="container-fluid p-0 bg-white">
		<?php
			if (isset($_GET['p'])) {
				getPage ($_GET['p']);	
			}else{
				getPage ('beranda');
			}
		?>
	</div>

	<div class="container-fluid p-3 bg-dark text-white">
		<p><h5>Sistem Informasi Perpustakaan (sipus) | Praktikum </h5></p>
		<p><h6><small>
		Kasus asli dari Kominfo & Panitia VSGA <br />
		Modifikasi oleh Stendy B. Sakur (Politeknik Negeri Nusa Utara) <br />
		Logmodif: menggunakan Bootsrap sederhana dan Mengubah Teknik Pemrograman dengan menggunakan konsep Subrutin / modular</small></h6></p>
	</div>

<!-- offline
	<script src="plugin/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
-->
</body>
</html>