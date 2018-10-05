<form method="POST">
	<h1>KOMENTAR</h1>
	<textarea name="komentar"></textarea><br>
	<input type="submit" name="submit" value="KIRIM">
</form>

<?php
	if (isset($_POST['submit'])) {
		$komentar = $_POST['komentar'];

		if (str_word_count($komentar)>=5) {
			echo "Komentar anda :<br>";
			echo $komentar;
		}
		else{
			echo "KOMENTAR Harus Lebih Dari 5 Kata";
		}
	}
?>
