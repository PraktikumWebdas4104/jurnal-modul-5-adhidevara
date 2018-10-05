<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="pass_mhs"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="daftar" value="DAFTAR"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['daftar'])) {
		include 'prosesregris.php';
	}

?>
