<?php

	session_start();
	include 'koneksi.php';

	$patok = $_GET['patok'];
	$cari  = $_GET['cari'];
	
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

<?php
	
	if($patok == "nim"){
		$nim = "select*from mhs where nim = '$cari'";
		$sql_nim = mysql_query($nim) or die(mysql_error());
		// $hasil_nim = mysql_num_rows($sql_nim);
		//$data_nim = mysql_fetch_array($sql_nim);
		
		?>
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
				while($data_nim = mysql_fetch_array($sql_nim)){
				?>			
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $data_nim['nim']; ?></td>
						<td><?php echo $data_nim['nama_mhs']; ?></td>
						<td><?php echo $data_nim['kelas']; ?></td>
						<td>
							<?php
								if($data_nim['prodi'] == "1"){
									echo "Pendidikan Ilmu Komputer";
								}else{
									echo "Ilmu Komputer";
								}
							?>
						</td>
						<td><?php echo $data_nim['angkatan']; ?></td>
						<td>
							<a href='edit.php?'>Edit</a>
						</td>
					</tr>
				<?php
					$i++;
				}
				?>
		</table>
		<?php
	}else if($patok == "nama"){
		$nama = "select*from mhs where nama_mhs = '$cari' or nama_mhs like '$cari%' or nama_mhs like '%$cari' or nama_mhs like '%$cari%' order by nim";
		$sql_nama = mysql_query($nama) or die(mysql_error());
		// $hasil_nama = mysql_num_rows($sql_nama);
		$data_nama = mysql_fetch_array($sql_nama);
	}else if($patok == "kelas"){
		$kelas = "select*from mhs where kelas = '$cari'";
		$sql_kelas = mysql_query($kelas) or die(mysql_error());
		// $hasil_kelas = mysql_num_rows($sql_kelas);
		$data_kelas = mysql_fetch_array($sql_kelas);
	}else if($patok == "prodi"){
		$prodi = "select*from mhs where prodi = '$cari' or prodi like '$cari%' or prodi like '%$cari' or prodi like '%$cari%' order by nim";
		$sql_prodi = mysql_query($prodi) or die(mysql_error());
		// $hasil_prodi = mysql_num_rows($sql_prodi);
		$data_prodi = mysql_fetch_array($sql_prodi);
	}else if($patok == "angkatan"){
		$angkatan = "select*from mhs where angkatan = '$cari' or angkatan like '$cari%' or angkatan like '%$cari' or angkatan like '%$cari%' order by nim";
		$sql_angkatan = mysql_query($angkatan) or die(mysql_error());
		//$hasil_angkatan = mysql_num_rows($sql_angkatan);
		$data_angkatan = mysql_fetch_array($sql_angkatan);
	}

	// if(!empty($data_nim)){
		
	// }
	// if(!empty($data_nama)){
	
	// }
	// if(!empty($data_kelas)){
	
	// }
	// if(!empty($data_prodi)){
	
	// }
	// if(!empty($data_angkatan)){
		
	// }
	
?>