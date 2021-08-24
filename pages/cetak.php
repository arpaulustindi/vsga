<?php require_once "../modul/modul.php"; ?> 

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  	<script src="../plugin/jquery-3.5.1.min.js"></script>
  	<script src="../plugin/popper-1.16.0.min.js"></script>
  	<script src="../plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<h3>Data Anggota</h3>
</div>

<div class="container-fluid">
<table class="table table-striped">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
		<?php getLayoutPrint(); ?>
</table>

<script>
	window.print();
</script>

</div>
</body>
</html>