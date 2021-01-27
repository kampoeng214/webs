<?php
include "../koneksi.php";

$NIM 				= $_GET["NIM"];
$Nama_Siswa		= $_GET["Nama_Siswa"];
$Tanggal_Lahir 		= $_GET["Tanggal_Lahir"];
$JK 				= $_GET["JK"];
$Alamat 			= $_GET["Alamat"];
$No_Telp 			= $_GET["No_Telp"];

$No_Registrasi		= $_GET["No_Registrasi"];
$uid				= $_GET["uid"];
$Kode_Kelas_Mhs 	= $_GET["Kode_Kelas_Mhs"];

if ($add = mysqli_query($konek, "INSERT INTO siswa (NIM, Nama_Siswa, Tanggal_Lahir, JK, Alamat, No_Telp, No_Registrasi, uid, Kode_Kelas_Mhs ) VALUES 
	('$NIM', '$Nama_Siswa', '$Tanggal_Lahir', '$JK', '$Alamat', '$No_Telp', '$No_Registrasi', '$uid', '$Kode_Kelas_Mhs')")){
		header("Location: siswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>