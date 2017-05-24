<?php

	session_start();
	include 'koneksi.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql1 = mysql_query("select*from dosen where kd_dosen='$username' and password='$password'");
	$hasil1 = mysql_num_rows($sql1);
	$sql2 = mysql_query("select*from mhs where nim='$username' and pass_mhs='$password'");
	$hasil2 = mysql_num_rows($sql2);
	
	
	if($hasil1==1){
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;
		header('Location:dosen.php');
	}else if($hasil2==1){
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;
		header('Location:mhs.php');
	}else if($username == "Admin" && $password == "admin"){
		header('Location:admin.php');
	}else{
		echo "Ma'af, username atau password Anda Salah !";
	}
?>