<?php

	session_start();
	include 'koneksi.php';
	
	$id_dosen = $_SESSION['user'];
	$dosen = "select*from dosen where id_dosen = '$id_dosen'";
	$sql_dosen = mysql_query($dosen) or die(mysql_error());
	$data_dosen = mysql_fetch_array($sql_dosen);
?>
<html>
	<body>
		<h1>Data Dosen</h1>
		<a href="logout.php">Logout</a>
		<table border="1">
			<tr>
				<th>Kode Dosen</th>
				<td><?php echo $data_dosen['id_dosen'];?></td>
			</tr>
			<tr>
				<th>Nama Dosen</th>
				<td><?php echo $data_dosen['nama_dosen'];?></td>
			</tr>
			<tr>
				<th>Kode Kuliah</th>
				<td><?php echo $data_dosen['kd_matkul'];?></td>
			</tr>
		</table>
		<hr/>
		<ul>
			<a href="kontrak_dosen.php"><li>Lihat Mahasiswa yang kontrak</li></a>
			<a href="bimbing_dosen.php"><li>Lihat Mahasiswa yang di bimbing</li></a>
		</ul>
		<hr/>
		<h2>Data Mahasiswa yang Kontrak</h2>
		<table border="1">
			<tr>
				<td>No</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Program Studi</td>
			</tr>
		</table>
	</body>
</html>