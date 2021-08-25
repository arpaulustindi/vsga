<?php

// gunakan modul yang telah dibuat yaitu modul.php
// pada folder: modul
require_once "../modul/modul.php";

// definisikan variabel POST dari form
// ke dalam tipe data array
$arr = array (	
				"idbuku"=>htmlentities($_POST['idbuku'],ENT_QUOTES),
				"judulbuku"=>htmlentities($_POST['judulbuku'],ENT_QUOTES),
				"kategori"=>htmlentities($_POST['kategori'],ENT_QUOTES), 
				"pengarang"=>htmlentities($_POST['pengarang'],ENT_QUOTES),
				"penerbit"=>htmlentities($_POST['penerbit'],ENT_QUOTES),
				"page"=>htmlentities($_POST['page'],ENT_QUOTES)
			);

// jalankan fungsi processUpdateUser, dengan paramater
// 1. array data dari form
// 2. parameter tombol proses untuk update data
processUpdateBuku ($arr, $_POST['update']);

?>
