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
		<h1>Selamat Datang Admin</h1>
		<a href="logout.php">Logout</a>
		
		<hr/>
		<h2>Tambah Dosen</h2>
		<a href="admin.php">Kembali</a><br/><br/>
		<form action="tambah_dosen_proses.php" method="POST">
		<table>
			<tr>
				<th>Kode Dosen</th>
				<td>:</td>
				<td><input type="text" name="kd_dosen" /></td>
			</tr>
			<tr>
				<th>Nama Dosen</th>
				<td>:</td>
				<td><input type="text" name="nm_dosen" /></td>
			</tr>
			<tr>
				<th>Password</th>
				<td>:</td>
				<td><input type="password" name="kd_dosen" /></td>
			</tr>
			<tr>
				<th>Matakuliah</th>
				<td>:</td>
				<td>
					<select name="matkul">
						<option value="">Mata Kuliah</option>
					</select>
				</td>
			</tr>
			<tr>
				<th></th>
				<td></td>
				<td>
					<input type="submit" value="Simpan" />
					<input type="reset" value="Batal" />
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>