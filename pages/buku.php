<?php require_once "modul/modul.php"; ?>

<div class="p-3 container-fluid">
	<h3>Tampil Data Buku</h3>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-9">
			<div class="btn-group">
				<a href="index.php?p=buku-input" class="btn btn-primary">Tambah Buku
				</a>
			</div>
			<div class="btn-group">
				<a href="pages/cetak.php" target="_blank" class="btn btn-primary">Cetak Buku
				</a>
			</div>
		</div>
		<div class="col-3 justify-content-end">
			<form class="form-inline" method="POST">
			<div class="btn-group">
				<input type="text" name="pencarian" class="form-control" id="pencarian" placeholder="Cari Buku">
				<input type="submit" name="search" value="search" class="btn btn-success">
			</div>
			</form>
		</div>
	</div>
</div>

<div class="p-3 container-fluid">
	<?php getTampilBuku($_GET, $_SERVER['REQUEST_METHOD']); ?>
</div>