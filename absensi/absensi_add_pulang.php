
<?php
include "../koneksi.php";
date_default_timezone_set('Asia/jakarta');
$uid= $_GET["uid"];
$status		= $_GET["status"];
// $jampulang	= date('Y-m-d/h:i:s');
    $updt = "UPDATE tblkehadiran SET jampulang=CURRENT_TIME(), status = 'Pulang' WHERE uid='$uid' AND status = 'Masuk'";

	if (mysqli_query($konek, $updt)){
		echo "Done";
		mysqli_close($konek);
	}
	else{
		echo "error is".mysqli_error($updt);
	}
	header("Location: absensi.php");



?>          