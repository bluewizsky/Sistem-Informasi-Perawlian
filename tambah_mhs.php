<html>
	<body>
		<h1>Form Daftar Baru Mahasiswa</h1>
		<form action="nambah_mhs.php" method="POST">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><input type="text" name="kelas"></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td>:</td>
					<td>
						<select name="prodi">
							<option value="">--Program Studi--</option>
							<option value="Pendidikan Ilmu Komputer">Pendidikan Ilmu Komputer</option>
							<option value="Ilmu Komputer">Ilmu Komputer</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Angkatan</td>
					<td>:</td>
					<td>
						<select name="angkatan">
							<option value="">--Angkatan--</option>
							<?php
								$i;
								for($i=2008; $i<2014; $i++){
									echo "<option value='$i'>$i</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="pass"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" value="Sign Up">
						<input type="reset" value="Batal">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
