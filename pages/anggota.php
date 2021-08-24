<?php require_once "modul/modul.php"; ?>

<div class="container-fluid p-3">
	<h3>Tampil Data Anggota</h3>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-9">
			<div class="btn-group">
				<a href="index.php?p=anggota-input" class="btn btn-primary">Tambah Anggota
				</a>
			</div>
			<div class="btn-group">
				<a href="pages/cetak.php" target="_blank" class="btn btn-primary">Cetak Anggota
				</a>
			</div>
		</div>
		<div class="col-3 justify-content-end">
			<form class="form-inline" method="POST">
			<div class="btn-group">
				<input type="text" name="pencarian" class="form-control" id="pencarian" placeholder="Cari Pengguna">
				<input type="submit" name="search" value="search" class="btn btn-success">
			</div>
			</form>
		</div>
	</div>
</div>

<div class="container-fluid p-3">
	<?php getTampilAnggota($_GET, $_SERVER['REQUEST_METHOD']); ?>
</div>