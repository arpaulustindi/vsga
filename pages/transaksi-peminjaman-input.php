<?php require_once "modul/modul.php"; ?>
<div class="p-3 container-fluid">
	<h3>Input Peminjaman Baru</h3>
</div>
<div class="pr-5 container-fluid">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	
	<table class="table table-striped table-responsive-sm">
		<!--<tr>
			<td>FOTO</td>
			<td>
					<input type="file" name="foto" class="border form-control-file" id="foto">
			</td>
		</tr>-->
		<tr>
			<td>ID Transaksi</td>
			<td>
					<input type="text" name="idtransaksi" class="form-control" id="idtransaksi" placeholder="Masukkan ID Transaksi" required>
					<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Anggota Peminjam</td>
			<td>
				<select name="idanggota" id="idanggota" class="form-control" placeholer="Pilih Anggota Peminjam" required>
					<?php
						$sql_anggota = "SELECT * FROM tbanggota";
						$query_anggota = mysqli_query(getConnection(), $sql_anggota);
						while($row = mysqli_fetch_array($query_anggota)){
					?>
					<option value="<?php echo $row['idanggota'];?>"><?php echo $row['nama'];?></option>
					<?php
						}
					?>
				</select>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
			<!--<td><input type="text" name="idanggota" class="form-control" id="idanggota" placeholder="Nama Anggota" required>
				
			</td>-->
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td>
				<select name="idbuku" id="idbuku" class="form-control" placeholer="Pilih Buku" required>
					<?php
						$sql_buku = "SELECT * FROM tbbuku";
						$query_buku = mysqli_query(getConnection(), $sql_buku);
						while($row = mysqli_fetch_array($query_buku)){
					?>
					<option value="<?php echo $row['idbuku'];?>"><?php echo $row['judulbuku'];?></option>
					<?php
						}
					?>
				</select>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Tanggal Peminjaman</td>
			<td><input type="text" name="tglpinjam" class="form-control" id="tglpinjam" placeholder="Tanggal Pinjam" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Tanggal Pengembalian</td>
			<td><input type="text" name="tglkembali" class="form-control" id="tglkembali" placeholder="Tanggal Kembali" required>
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
		<!--<tr>
			<td>Kategori</td>
			<td><input type="text" name="kategori" class="form-control" id="kategori" placeholder="Masukkan Kategori" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>-->
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
	</form>
</div>