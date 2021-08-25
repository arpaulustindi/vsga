<?php  
require_once "modul/modul.php"; 
extract(getBukuForUpdate($_GET)); 
?>

<div class="p-3 container-fluid">
	<h3>Edit Data Buku</h3>
</div>
<div class="pr-5 container-fluid">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	
	<table class="table table-striped table-responsive-sm">
		<!--<tr>
			<td>FOTO</td>
			<td>
					<input type="file" name="foto" class="border form-control-file" id="foto">
			</td>
		</tr>-->
		<tr>
			<td>ID Buku</td>
			<td>
					<input type="text" value="<?php echo $idbuku;?>" name="idbuku" class="form-control" id="idbuku" placeholder="Masukkan ID Buku" required>
					<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><input type="text" value="<?php echo $judulbuku;?>" name="judulbuku" class="form-control" id="judulbuku" placeholder="Masukkan Judul Buku" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<!--<tr>
			<td>Jenis Kelamin</td>
			<td>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="jenis_kelamin" value="Pria" checked>Pria
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="Wanita">Wanita	
					</label>	
				</div>
			</td>
		</tr>-->
		<!--<tr>
			<td>Alamat</td>
			<td>
				<textarea class="form-control" rows="2" cols="40" name="alamat" id="alamat" required></textarea>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data dilengkapi</div>
			</td>
		</tr>-->
		<tr>
			<td>Kategori</td>
			<td><input type="text" value="<?php echo $kategori;?>" name="kategori" class="form-control" id="kategori" placeholder="Masukkan Kategori" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" value="<?php echo $pengarang;?>" name="pengarang" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" value="<?php echo $penerbit;?>" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
				<input type="hidden" name="page" value="<?php echo $page; ?>" id="page"> <!--Tambahan-->
				<input type="submit" name="update" value="Update" class="btn btn-primary"></td>
		</tr>
	</table>
	</form>
</div>