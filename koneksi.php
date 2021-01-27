<?php
$servername = "localhost";
$database = "abcd";
$username = "root";
$password = "";
$konek = mysqli_connect ($servername, $username, $password);
$db = mysqli_select_db ($konek, $database);
?>