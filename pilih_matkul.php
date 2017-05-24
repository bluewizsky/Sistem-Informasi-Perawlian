<?php

	include 'koneksi.php';
	session_start();
	
	$kd_matkul = $_GET['kd_matkul'];
	$prodi = $_SESSION['prodi'];
	$nim = $_SESSION['nim'];
	$nama_mhs = $_SESSION['nama'];
	
	$mk = "select * from matkul where kd_matkul = '$kd_matkul' and prodi = '$prodi'";
	$sql_mk = mysql_query($mk) or die(mysql_error());
	$data_mk = mysql_fetch_array($sql_mk);
	
	$kd_mk = $data_mk['kd_matkul'];
	$sks = $data_mk['sks'];
	$smstr = $data_mk['id_semester'];
	$prodi = $data_mk['prodi'];
	$kd_dosen = $data_mk['kd_dosen'];
	
	//echo $kd_mk." "." ".$sks." ".$smstr." ".$prodi." ".$kd_dosen." ".$nim." ".$nama_mhs;
	
	$pilih = "insert into sementara value (null,'$nim','$nama_mhs','$kd_mk','$kd_dosen','$sks','$smstr','1')";
	$sql_pilih = mysql_query($pilih) or die(mysql_error());
	
	header('Location:kontrak_mhs.php');

?>