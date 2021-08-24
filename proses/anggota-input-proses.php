<?php

// gunakan modul.php yang telah dibuat
require_once "../modul/modul.php";

// simpan seluruh variabel form ke dalam
// variabel array agar lebih mudah untuk di kirim
// ke proses data
$data = array(	"id_anggota"=>htmlentities($_POST['id_anggota'],ENT_QUOTES), 
				"nama"=>htmlentities($_POST['nama'],ENT_QUOTES), 
				"jenis_kelamin"=>htmlentities($_POST['jenis_kelamin'],ENT_QUOTES), 
				"alamat"=>htmlentities($_POST['alamat'], ENT_QUOTES), 
				"status"=>"Tidak Meminjam", 
				"nama_file"=>htmlentities($_FILES['foto']['name'],ENT_QUOTES));

// jalankan fungsi processAddUser()
// untuk melakukan proses penyimpanan data
processAddUser ($data, $_POST["simpan"]);	

?>