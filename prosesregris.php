<?php
	include 'koneksi.php';

		if(isset($_GET['id'])){
  			$id   = $_GET['id'];
  			$sql  = "SELECT * FROM mhs WHERE id = $id";

  			if ($konek->query($sql)) {
  				$result = $konek->query($sql);
  				$row = $result->fetch_assoc();
  			}
  		}

  		else{
  			if (isset($_POST['daftar'])) {
  				include 'koneksi.php';

  				if ($konek){
	  				$nim = $_POST['nim'];
	  				$nama = $_POST['nama'];
	  				$email = $_POST['email'];
	  				$pass_mhs = $_POST['pass_mhs'];
	  				$cekEmail = strpos($email, '@gmail.com');
	  				$query = mysqli_query($konek, "SELECT * FROM mhs WHERE nim = '$nim'");
	  				$row = mysqli_fetch_array($query);

	  				if (strlen($nim)<=10) {
	  					if (is_numeric($nim) == TRUE) {
	  						if (strlen($nama)<=25) {
	  							if (preg_match("/^[a-zA-Z ]*$/",$nama) {
	  								if ($cekEmail !== FALSE) {
	  									if ($nim!==$row['nim']) {
	  										$sql = $konek->query("
	  										INSERT INTO `mhs` (`nim`, `nama`, `email`, `password`)
	  										VALUES ('$nim', '$nama', '$email', '$pass_mhs')
	  												 ");
	  										echo "REGISTRASI SUKSES";
	  									}
	  									else{
	  										echo "<b>ERROR : </b>NIM Telah Terdaftar";
	  									}
	  								}
	  								else{
	  									echo "<b>ERROR : </b>EMAIL Tidak Sesuai";
	  								}
	  							}
	  							else{
	  								echo "<b>ERROR : </b>NAMA Harus Karakter Huruf";
	  							}
	  						}
	  						else{
	  							echo "<b>ERROR : </b>Panjang NAMA Tidak Boleh Lebih dari 25 Digit";
	  						}
	  					}
	  					else{
	  						echo "<b>ERROR : </b>NIM Harus Karakter Angka";
	  					}
	  				}
	  				else{
	  					echo "<b>ERROR : </b>Panjang NIM Tidak Boleh Lebih dari 10 Digit";
	  				}
	  			}
	  			else{
	  				echo "<b>ERROR : </b>REGISTRASI GAGAL";
	  			}
  			}
  		}
?>
