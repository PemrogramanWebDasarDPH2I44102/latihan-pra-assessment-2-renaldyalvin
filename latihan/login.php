<?php
	$konek = mysqli_connect("localhost", "root", "","latihan");
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="post">
		Nama : <input type="text" name="nama"><br><br>
		NIP : <input type="text" name="nip"><br><br>
		<input type="submit" name="submit" value="LOGIN">
	</form>
</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
	}

	$data = "SELECT * FROM karyawan WHERE nip='$nip'";
	$que = mysqlii_query($konek, $data);
	$take = mysqli_fetch_array($que);
	print_r($take);

if (nama==$nama['0'] && NIP==$nip['1']) {
	header("Location:create_paket.php");	
}else{
	echo "Gagal Login";
}
?> 