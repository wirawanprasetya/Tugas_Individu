<?php
// cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"]) ) {
	// Cek Username & Password
	if( $_POST["Username"] == "admin" && $_POST["Password"] == "123") {
	// Jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
	// Jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body {
		background-color: grey;
	}
</style>
	<title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;"> username/password salah!</p>
<?php endif; ?>

<ul>
<form action="admin.php" method="post">
	<li>
		<label for="Username">Username :</label>
		<input type="text" name="Username" id="Username">
	</li>
	<li>
		<label for="Password">Password :</label>
		<input type="Password" name="Password" id="Password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</ul>

</body>
</html>