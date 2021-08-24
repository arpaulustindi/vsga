<?php
	require_once "../modul/modul.php";
	extract(getPrintKartuUser ($_GET['id']));
?>

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
	<div class="container">
		<h3>Kartu Anggota</h3>
		<div class="card" style="width:250px">
			<img class="card-img-top" src="../images/<?php echo $foto; ?>" alt="card image">
			<div class="card-body">
				<h4 class="card-title"><?php echo strtoupper($nama); ?></h4>
				<p class="card-text">
					ID Anggota: <?php echo $idanggota; ?><br />
					Jenis Kelamin: <?php echo $jeniskelamin; ?><br />
					Alamat:<br />
					<?php echo $alamat; ?>
				</p>
			</div>
		</div>
	</div>
<script>
	window.print();
</script>

</body>
</html>