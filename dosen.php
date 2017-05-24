<?php

	session_start();
	include 'koneksi.php';
	
	$id_dosen = $_SESSION['user'];
	$dosen = "select a.kd_dosen,a.nama_dosen,b.nama_matkul from dosen a,matkul b where a.kd_dosen = '$id_dosen' and a.kd_dosen = b.kd_dosen;";
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
				<td><?php echo $data_dosen['kd_dosen'];?></td>
			</tr>
			<tr>
				<th>Nama Dosen</th>
				<td><?php echo $data_dosen['nama_dosen'];?></td>
			</tr>
			<tr>
				<th>Matakuliah</th>
				<td><?php echo $data_dosen['nama_matkul'];?></td>
			</tr>
		</table>
		<hr/>
		<ul>
			<a href="kontrak_dosen.php"><li>Lihat Mahasiswa yang kontrak</li></a>
			<a href="bimbing_dosen.php"><li>Lihat Mahasiswa yang di bimbing</li></a>
		</ul>
	</body>
</html>