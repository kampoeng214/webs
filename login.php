<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);

// $username = 'aa';
// $password = md5('aa');


$login = mysqli_query ($konek, "SELECT * FROM user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

$value = $login->fetch_row();

// print_r($value[4]);
if($cek > 0){
	session_start();
	$_SESSION['role'] = $value[4];
	$_SESSION['password'] = $password;
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	if($value[4] == 1) {
		header("location:absensi/user.php");
	} else {
		header("location:absensi/index.php");

	}

}else{
	header("location:index.php?pesan=gagal");	
}
 
?>