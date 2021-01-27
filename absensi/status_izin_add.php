<?php

include "../koneksi.php";
date_default_timezone_set('Asia/jakarta');
//$uid= $_GET["uid"];
//$status	= $_GET["status"];
$date	= date("y-m-d");
    $add = "INSERT INTO tblkehadiran( uid,  status, date) VALUES ('".$_GET['uid']."', '".$_GET['status']."', '$date')";
    
if (mysqli_query($konek, $add))
{
    echo "Done";
    mysqli_close($konek);
}
else{
    echo "error is".mysqli_error($konek);
}
header("Location: absensi.php");

?>