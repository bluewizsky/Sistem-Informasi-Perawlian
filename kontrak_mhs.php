<?php

	session_start();
	include 'koneksi.php';
	
	$id_mhs = $_SESSION['user'];
	$mhs = "select*from mhs where nim = '$id_mhs'";
	$sql_mhs = mysql_query($mhs) or die(mysql_error());
	$data_mhs = mysql_fetch_array($sql_mhs);
	
	$prodi = $data_mhs['prodi'];
	$nim = $data_mhs['nim'];
	$prodi = $data_mhs['prodi'];
	
	$_SESSION['nim'] = $data_mhs['nim'];
	$_SESSION['nama'] = $data_mhs['nama_mhs'];
	$_SESSION['prodi'] = $prodi;
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
		<h2>Kontrak Mata Kuliah</h2>
		<h3>Matakuliah Wajib</h3>
			<table border="1">
				<tr>
					<th>No</th>
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
					<th>Kode Dosen</th>
					<th>SKS</th>
					<th>Status</th>
				</tr>
				<?php
				$semester = "select b.semester from mhs a, nilai b where a.nim = b.nim group by b.semester order by b.semester desc";
				$sql_semester = mysql_query($semester) or die(mysql_error());
				$data_semester = mysql_fetch_array($sql_semester);
				$smstr = $data_semester['semester'];
				$smstr++;
				
				$matkul_wajib = "select a.kd_matkul,a.nama_matkul,a.kd_dosen,a.sks,b.prodi from matkul a, mhs b where id_semester = '$smstr' and a.prodi = '$prodi' and a.status = 'wajib' group by a.kd_matkul";
				$sql_matkul = mysql_query($matkul_wajib) or die(mysql_error());
				
				$i=1;
				while($data_matkul = mysql_fetch_array($sql_matkul)){
					$id_matkul = $data_matkul['kd_matkul'];
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $data_matkul['kd_matkul']; ?></td>
					<td><?php echo $data_matkul['nama_matkul']; ?></td>
					<td><?php echo $data_matkul['kd_dosen']; ?></td>
					<td><?php echo $data_matkul['sks']; ?></td>
					<td>
						<?php
						$pilih = "select * from sementara where nim = $nim and kd_matkul = '$id_matkul'";
						$sql_pilih = mysql_query($pilih) or die(mysqL_error());
						$data_pilih = mysql_fetch_array($sql_pilih);
						if(empty($data_pilih['status'])){
							echo "
							<a href='pilih_matkul.php?kd_matkul=$id_matkul'>Pilih</a> <b> | </b>
							Batal
							";
						}else{
							echo "
							Pilih <b> | </b>
							<a href='batal_matkul.php?kd_matkul=$id_matkul'>Batal</a>
							";
						}
						?>
					</td>
				</tr>
				<?php
					$i++;
				}
				?>
			</table>
		<h3>Matakuliah Pilihan</h3>
			<table border="1">
				<tr>
					<th>No</th>
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
					<th>Kode Dosen</th>
					<th>SKS</th>
					<th>Status</th>
				</tr>
				<?php
				$matkul_pilihan = "select a.kd_matkul,a.nama_matkul,a.kd_dosen,a.sks,b.prodi from matkul a, mhs b where id_semester = '$smstr' and a.prodi = '$prodi' and a.status = 'pilihan' group by a.kd_matkul";
				$sql_matkul = mysql_query($matkul_pilihan) or die(mysql_error());
				
				$i=1;
				while($data_matkul = mysql_fetch_array($sql_matkul)){
				$id_mk = $data_matkul['kd_matkul'];
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $data_matkul['kd_matkul']; ?></td>
					<td><?php echo $data_matkul['nama_matkul']; ?></td>
					<td><?php echo $data_matkul['kd_dosen']; ?></td>
					<td><?php echo $data_matkul['sks']; ?></td>
					<td>
						<?php
						$pilih = "select * from sementara where nim = $nim and kd_matkul = '$id_mk'";
						$sql_pilih = mysql_query($pilih) or die(mysqL_error());
						$data_pilih = mysql_fetch_array($sql_pilih);
						if(empty($data_pilih['status'])){
							echo "
							<a href='pilih_matkul.php?kd_matkul=$id_mk'>Pilih</a> <b> | </b>
							Batal
							";
						}else{
							echo "
							Pilih <b> | </b>
							<a href='batal_matkul.php?kd_matkul=$id_mk'>Batal</a>
							";
						}
						?>
					</td>
				</tr>
				<?php
					$i++;
				}
				?>
			</table>
		<hr/>
		<?php
			$sks = "select * from sementara where nim = '$nim'";
			$sql_sks = mysql_query($sks) or die(mysql_error());
			
			$hitung = 0;
			while($data_sks = mysql_fetch_array($sql_sks)){
				$hitung+=$data_sks['sks'];
			}
		?>
		Total SKS Kontrak : <?php echo $hitung; ?>
	</body>
</html>