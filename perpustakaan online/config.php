<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$host	= "localhost";
$user	= "root";
$pass	= "";
$name	= "basicblog";

$koneksi = mysqli_connect("$host", "$user", "$pass", "$name");
?>