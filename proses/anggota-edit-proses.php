<?php

// gunakan modul yang telah dibuat yaitu modul.php
// pada folder: modul
require_once "../modul/modul.php";

// definisikan variabel POST dari form
// ke dalam tipe data array
$arr = array (	"id_anggota"=>htmlentities($_POST['id_anggota'],ENT_QUOTES),
				"nama"=>htmlentities($_POST['nama'],ENT_QUOTES),
				"jenis_kelamin"=>htmlentities($_POST['jenis_kelamin'],ENT_QUOTES), 
				"alamat"=>htmlentities($_POST['alamat'],ENT_QUOTES),
				"nama_file"=>htmlentities($_FILES['foto']['name'],ENT_QUOTES),
				"foto_awal"=>htmlentities($_POST['foto_awal'],ENT_QUOTES),
				"page"=>htmlentities($_POST['page'],ENT_QUOTES));

// jalankan fungsi processUpdateUser, dengan paramater
// 1. array data dari form
// 2. parameter tombol proses untuk update data
processUpdateUser ($arr, $_POST['update']);

?>
