<?php

	include 'koneksi.php';
	session_start();
	
	$kelas = $_GET['kelas'];
	$angkatan = $_GET['angkatan'];
	$kd_dosen = $_SESSION['kd_dosen'];
	
	$batal_pa = "delete from pa where kd_dosen='$kd_dosen'";
	$sql_batal_pa = mysql_query($batal_pa) or die(mysql_error());
	
	header('Location:lihat_dosen.php');
?>