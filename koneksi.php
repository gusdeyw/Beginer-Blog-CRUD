<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "blog_gambar";
$con = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($con, "utf8");

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>