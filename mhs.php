<?php

	session_start();
	include 'koneksi.php';
	
	$id_mhs = $_SESSION['user'];
	$mhs = "select*from mhs where nim = '$id_mhs'";
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
				<td><?php echo $data_mhs['nim'];?></td>
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
				<td>
					<?php
						if($data_mhs['prodi'] == "1"){
							echo "Pendidikan Ilmu Komputer";
						}else{
							echo "Ilmu Komputer";
						}
					?>
				</td>
			</tr>
		</table>
		<hr/>
		<ul>
			<a href="kontrak_mhs.php"><li>Kontrak Matakuliah</li></a>
			<a href="khs_mhs.php"><li>KHS Semester</li></a>
			<a href="transkrip_mhs.php"><li>Transkrip Sementara</li></a>
		</ul>
		<hr/>
	</body>
</html>