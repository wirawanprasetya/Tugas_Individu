<?php
function salam($waktu , $nama){
	return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?php echo salam("Pagi", "Wirawan Dwi Prasetya"); ?></h1>

</body>
</html>