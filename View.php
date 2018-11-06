<?php 
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db("daftartamu",$conn);
	$hasil =mysqli_query("select * from bukutamu",$conn);
	$jumlah = mysqli_num_rows($hasil);
	echo "<center>Daftar pengunjung</center>";
	echo "jumlah pengunjung : $jumlah";
	$a=1;
	while($baris = mysqli_fetch_array($hasil))
	{
		echo "<br>";
		echo $a;
		echo "Nama : ";
		echo $baris[0];
		echo "<br>";
		echo "Email : ";
		echo $baris[1];
		echo "<br>";
		echo "No Tlp : ";
		echo $baris[2];
		echo "<br>";
		echo "Komentar : ";
		echo $baris[3];
	}
 ?>