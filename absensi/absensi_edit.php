<?php

include "../koneksi.php";

$uid		= $_GET["uid"];
$jampulang	= date('Y-m-d/h:i:s');


if($edit = mysqli_query($konek, "UPDATE tblkehadiran SET jampulang='$jampulang' WHERE uid='$uid'")){
	header("Location: absensi.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>