<?php

	include 'koneksi.php';
	session_start();
	
	$kelas = $_GET['kelas'];
	$angkatan = $_GET['angkatan'];
	$kd_dosen = $_SESSION['kd_dosen'];
	
	$masuk_pa = "insert into pa value (null,'$kd_dosen','$kelas','$angkatan')";
	$sql_masuk_pa = mysql_query($masuk_pa) or die(mysql_error());
	
	header('Location:lihat_dosen.php');
?>