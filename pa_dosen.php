<?php

	session_start();
	include 'koneksi.php';
	
	$kd_dosen = $_GET['kd_dosen'];
	$_SESSION['kd_dosen']=$kd_dosen;
?>
<html>
	<body>
		<h1>Selamat Datang Admin</h1>
		<a href="logout.php">Logout</a>
		
		<hr/>
		<h2>Tentukan Penempatan Dosen PA</h2>
		<a href="admin.php">Kembali</a><br/><br/>
		<form action="pa_dosen_proses.php" method="GET">
		<table>
			<tr>
				<th>Kelas</th>
				<td>:</td>
				<td>
					<select name="kelas">
						<option value="">--Kelas--</option>
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="c">C</option>
						<option value="d">D</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Angkatan</th>
				<td>:</td>
				<td>
					<select name="angkatan">
						<option value="">--Angkatan--</option>
						<?php
							for($i=2008; $i<=2014; $i++){
								echo"
									<option value='$i'>$i</option>
								";
							}
						?>
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