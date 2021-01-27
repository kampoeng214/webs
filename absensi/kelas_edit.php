<?php
include "../koneksi.php";

$Kode_Kelas	= $_GET["Kode_Kelas"];
$Nama_Kelas	= $_GET["Nama_Kelas"];

if ($edit = mysqli_query($konek, "UPDATE kelas SET Nama_Kelas='$Nama_Kelas' WHERE Kode_Kelas='$Kode_Kelas'")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>