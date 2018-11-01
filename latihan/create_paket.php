<?php
	$konek = mysqli_connect("localhost", "root", "","latihan");
?>

<!DOCTYPE html>
<html>
<head>
	<title>paket</title>
</head>
<body>
	<h1>LOGIN</h1>
	<form action="" method="post">
		Isi paket : <input type="text" name="pkt"><br><br>
		Penghuni : <select>
				<option>PILIH</option>
				<option type="text" name="plgn" value="Alvin" >Alvin</option>
				<option type="text" name="plgn" value="Burhan" >Burhan</option>
				<option type="text" name="plgn" value="Angga" >Angga</option>
		</select>
		Tanggal datang : <input type="date" name="dtng"><br><br>
		Tanggal ambil : <input type="date" name="ambil"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$isi = $_POST['pkt'];
		$penghuni = $_POST['plgn'];
		$tgldtng = $_POST['dtng'];
		$tglambil = $_POST['ambil'];
	}
?>