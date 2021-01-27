<?php

include "../koneksi.php";

$uid = $_GET["uid"];

if($delete = mysqli_query($konek, "DELETE FROM siswa WHERE uid='$uid'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>