<?php

require_once "modul/modul.php";

session_start();

$_SESSION['sesi'] = NULL;

loginUser ($_POST['user'], $_POST['pass'],$_POST['submit']);

?>
