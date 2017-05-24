<?php

	session_start();
	include 'koneksi.php';
	
	$dosen = "select a.kd_dosen,a.nama_dosen,b.nama_matkul from dosen a, matkul b where a.kd_dosen = b.kd_dosen";
	$sql_dosen = mysql_query($dosen) or die(mysql_error());
	
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
		<h2>Data Dosen</h2>
		
		<a href="tambah_dosen.php">Tambah Dosen</a>
		<a href="pa_dosen.php">Tentukan PA</a>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Kode Dosen</th>
				<th>Nama Dosen</th>
				<th>Ampu Matakuliah</th>
				<th>Status</th>
				<th>Tindakkan</th>
			</tr>
			<?php
				$i=1;
				while($data_dosen = mysql_fetch_array($sql_dosen)){
					$kd_dosen = $data_dosen['kd_dosen'];
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $data_dosen['kd_dosen']; ?></td>
						<td><?php echo $data_dosen['nama_dosen']; ?></td>
						<td><?php echo $data_dosen['nama_matkul']; ?></td>
						<td>
							<?php
								$li_pa = "select * from pa where kd_dosen = '$kd_dosen'";
								$sql_li_pa = mysql_query($li_pa) or die(mysql_error());
								$data_li_pa = mysql_fetch_array($sql_li_pa);
								$hasil_li_pa = mysql_num_rows($sql_li_pa);
								if($hasil_li_pa == 0){
									echo "-";
								}else{
									echo "PA kelas ".$data_li_pa['kelas']." angkatan ".$data_li_pa['angkatan'];
								}
							?>
						</td>
						<td>
							<?php
								$pa = "select * from pa where kd_dosen = '$kd_dosen'";
								$sql_pa = mysql_query($pa) or die(mysql_error());
								$data_pa = mysql_fetch_array($sql_pa);
								$hasil_pa = mysql_num_rows($sql_pa);
								if($hasil_pa == 0){
									echo "
										<a href='pa_dosen.php?kd_dosen=$kd_dosen'>Jadikan Dosen PA</a>
									";
								}else{
									echo "
										<a href='pa_dosen_batal.php'>Batal</a>
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

	</body>
</html>