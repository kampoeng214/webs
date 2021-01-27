<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br />
	<br />
	<center>
		<h2>WWW.MALASNGODING.COM</h2>
	</center>

	<br />
	<div class="login">
		<br />
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
			<div>
				<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<font color='#ff0000'>Username Dan Password Salah....!</font>";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password != "") {
			return true;
		} else {
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>

</html>