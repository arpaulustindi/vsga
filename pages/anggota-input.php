<div class="container-fluid p-3">
	<h3>Input Anggota Baru</h3>
</div>
<div class="container-fluid pr-5">
	<form action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	
	<table class="table table-striped table-responsive-sm">
		<tr>
			<td>FOTO</td>
			<td>
					<input type="file" name="foto" class="form-control-file border" id="foto">
			</td>
		</tr>
		<tr>
			<td>ID Anggota</td>
			<td>
					<input type="text" name="id_anggota" class="form-control" id="id_anggota" placeholder="Masukkan ID Anggota" required>
					<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
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
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<textarea class="form-control" rows="2" cols="40" name="alamat" id="alamat" required></textarea>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data dilengkapi</div>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
	</form>
</div>