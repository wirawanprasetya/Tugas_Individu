<?php
// $_GET

$mahasiswa = [
	
	[
		"nama" => "M. Tirta Wardhana", 
		"nim" => "18030244043", 
		"email" => "mtirtaw@gmail.com", 
		"jurusan" => "Biologi Murni",
		"gambar" => "tirta.png"
	]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>

</head>
<body>
<?php foreach( $mahasiswa as $mhs ) : ?>
	
	<?php 
	echo "<img src='$mhs[gambar]' width='70' height='90' />"."<br>";
	echo "Nama :".$mhs['nama']. "<br>";
	echo "NIM :" .$mhs['nim']. "<br>";
	echo "Email :" .$mhs['email']. "<br>" ;
	echo "Jurusan :" .$mhs['jurusan']. "<br>";
	?>
	<br>
	
	
<?php endforeach; ?>



<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>