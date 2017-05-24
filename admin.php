<?php

	session_start();
	include 'koneksi.php';
	
	// $id_dosen = $_SESSION['user'];
	// $dosen = "select*from dosen where id_dosen = '$id_dosen'";
	// $sql_dosen = mysql_query($dosen) or die(mysql_error());
	// $data_dosen = mysql_fetch_array($sql_dosen);
?>
<html>
	<body>
		<h1>Selamat Datang Admin</h1>
		<a href="logout.php">Logout</a>
		
		<hr/>
		<ul>
			<a href="lihat_dosen.php"><li>Lihat Data Dosen</li></a>
			<a href="lihat_mhs.php"><li>Lihat Data Mahasiswa</li></a>
			<a href="lihat_kontrak.php"><li>Lihat Data Perkuliahan</li></a>
		</ul>
	</body>
</html>