<?php

	session_start();
	include 'koneksi.php';
	
	$id_mhs = $_SESSION['user'];
	$mhs = "select*from mhs where id_mhs = '$id_mhs'";
	$sql_mhs = mysql_query($mhs) or die(mysql_error());
	$data_mhs = mysql_fetch_array($sql_mhs);
?>
<html>
	<body>
		<h1>Data Mahasiswa</h1>
		<a href="logout.php">Logout</a>
		<table border="1">
			<tr>
				<th>NIM</th>
				<td><?php echo $data_mhs['id_mhs'];?></td>
			</tr>
			<tr>
				<th>Nama Mahasiswa</th>
				<td><?php echo $data_mhs['nama_mhs'];?></td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td><?php echo $data_mhs['kelas'];?></td>
			</tr>
			<tr>
				<th>Program Studi</th>
				<td><?php echo $data_mhs['prodi'];?></td>
			</tr>
		</table>
		<hr/>
		<ul>
			<a href="kontrak_mhs.php"><li>Kontrak Matakuliah</li></a>
			<a href="khs_mhs.php"><li>KHS Semester</li></a>
			<a href="transkrip_mhs.php"><li>Transkrip Sementara</li></a>
		</ul>
		<hr/>
		<h2>KHS Semester</h2>
			
			<table border="1">
				<tr>
					<th colspan="7">Semester 1</th>
				</tr>
				<tr>
					<th rowspan="2">No</th>
					<th colspan="3">Matakuliah</th>
					<th rowspan="2">Nilai</th>
					<th rowspan="2">Mutu</th>
					<th rowspan="2">Ulang</th>
				</tr>
				<tr>
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
					<th>SKS</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Kode Matakuliah</td>
					<td>Nama Matakuliah</td>
					<td>SKS</td>
					<td>nilai</td>
					<td>nilai</td>
					<td>nilai</td>
				</tr>
			</table>
	</body>
</html>