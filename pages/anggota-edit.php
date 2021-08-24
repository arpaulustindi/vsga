<?php  
require_once "modul/modul.php"; 
extract(getUserForUpdate($_GET)); 
?>

<div class="container-fluid p-3">
	<h3>Edit Data Anggota</h3>
</div>
<div class="container-fluid">
	<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	<table class="table table-striped">
		<tr>
			<td>FOTO</td>
			<td>
				<img src="images/<?php echo $foto; ?>" class="rounded-circle" width=70px height=75px>
				<input type="file" name="foto">
				<input type="hidden" name="foto_awal" value="<?php echo $foto; ?>">
			</td>
		</tr>
		<tr>
			<td>ID Anggota</td>
			<td><input type="text" name="id_anggota" value="<?php echo $id_anggota; ?>" readonly="readonly" class="form-control" required>
			<div class="valid-feedback">Benar.</div>
			<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" required>
			<div class="valid-feedback">Benar.</div>
			<div class="invalid-feedback">Mohon data ini disi dahulu</div>		
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="Pria" 
						<?php if($jeniskelamin == "Pria") { ?>
						checked
					<?php } ?>
						>Pria
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="Wanita" 
					<?php if ($jeniskelamin == "Wanita") { ?>
					checked
					<?php } ?>
					>Wanita	
					</label>	
				</div>
			</td>
		</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea rows="2" cols="40" name="alamat" class="form-control" required><?php echo $alamat; ?></textarea>
			<div class="valid-feedback">Benar.</div>
			<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="page" value="<?php echo $page; ?>" id="page">
				<input type="submit" name="update" value="Update" id="tombol-simpan" class="btn btn-primary">
			</td>
		</tr>
	</table>
	</form>
</div>