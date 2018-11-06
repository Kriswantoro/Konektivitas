<!DOCTYPE html>
<html>
<head>
	<title>Simpan Buku Tamu</title>
</head>
<body>
	<h1>Simpan Buku Tamu MYSQL</h1>
	<?php 
		$nama =$_POST["nama"];
		$email =$_POST["email"];
		$no_tlp =$_POST["no_tlp"];
		$komentar =$_POST["komentar"];
		$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
		mysqli_select_db("daftartamu",$conn);
		echo "Nama : $nama<br>";
		echo "Email : $email<br>";
		echo "No Tlp : $no_tlp <br>";
		echo "Komentar : $komentar<br>";
		$sqlstr="insert into bukutamu (nama,email,no_tlp,komentar) values ('$nama','$email','$no_tlp','$komentar')";
		$hasil = mysqli_query($sqlstr,$conn);
		echo "Simpan Buku Tamu Berhasil Dilakukan";
	?>
</body>
</html>