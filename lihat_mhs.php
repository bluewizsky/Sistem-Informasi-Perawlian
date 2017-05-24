<?php

	session_start();
	include 'koneksi.php';
	
	$mhs = "select * from mhs";
	$sql_mhs = mysql_query($mhs) or die(mysql_error());
	
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
		<hr/>
		<h2>Data Mahasiswa</h2>
		<form action="cari_mhs.php" method="GET">
			<table>
				<tr>
					<td>Cari Berdasarkan</td>
					<td>:</td>
					<td>
						<select name="patok">
							<option value="">--Kategori--</option>
							<option value="nim">NIM</option>
							<option value="nama">Nama</option>
							<option value="kelas">Kelas</option>
							<option value="prodi">Program Studi</option>
							<option value="angkatan">Angkatan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Masukkan Data</td>
					<td>:</td>
					<td>
						<input type="text" name="cari" placeholder=" Masukkan yang dicari "/>
						<input type="submit" value="Cari">
					</td>
			</table>
		</form>
		<table border="1">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama Mahasiswa</th>
				<th>Kelas</th>
				<th>Program Studi</th>
				<th>Angkatan</th>
				<th>Tindakkan</th>
			</tr>
			<?php
				$i=1;
				while($data_mhs = mysql_fetch_array($sql_mhs)){
				?>			
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $data_mhs['nim']; ?></td>
						<td><?php echo $data_mhs['nama_mhs']; ?></td>
						<td><?php echo $data_mhs['kelas']; ?></td>
						<td>
							<?php
								if($data_mhs['prodi'] == "1"){
									echo "Pendidikan Ilmu Komputer";
								}else{
									echo "Ilmu Komputer";
								}
							?>
						</td>
						<td><?php echo $data_mhs['angkatan']; ?></td>
						<td>
							<a href='edit.php?'>Edit</a>
						</td>
					</tr>
				<?php
					$i++;
				}
				?>
		</table>
		<a href="tambah_mhs.php">Tambah mhs</a>

	</body>
</html>