<?php
include "../koneksi.php";

$Kode_Kelas	= $_GET["Kode_Kelas"];
$Nama_Kelas	= $_GET["Nama_Kelas"];

if($add = mysqli_query($konek, "INSERT INTO kelas (Kode_Kelas, Nama_Kelas) VALUES ('$Kode_Kelas', '$Nama_Kelas')")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>