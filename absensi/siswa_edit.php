<?php

include "../koneksi.php";

$NIM 				= $_GET["NIM"];
$Nama_Siswa		= $_GET["Nama_Siswa"];
$Tanggal_Lahir		= $_GET["Tanggal_Lahir"];
$JK					= $_GET["JK"];
$No_Telp			= $_GET["No_Telp"];
$Alamat				= $_GET["Alamat"];

$No_Registrasi		= $_GET["No_Registrasi"];
$uid				= $_GET["uid"];
$Kode_Kelas_Mhs		= $_GET["Kode_Kelas_Mhs"];

if($edit = mysqli_query($konek, "UPDATE siswa SET NIM='$NIM',Nama_Siswa='$Nama_Siswa', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	No_Telp='$No_Telp', Alamat='$Alamat', No_Registrasi='$No_Registrasi', Kode_Kelas_Mhs='$Kode_Kelas_Mhs' WHERE uid='$uid'")){
		header("Location: siswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>