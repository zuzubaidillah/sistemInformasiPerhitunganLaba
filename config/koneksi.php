<?php
$host = "localhost";
$user = "root";
$password = "";
$databaseName = "sistemInformasiPerhitunganLaba";

$conn = mysqli_connect($host, $user, $password, $databaseName);
// $conn = mysqli_connect("localhost", "root", "", "sistemInformasiPerhitunganLaba");

if (!$conn) {
    echo "<script>alert('Database Error');</script>";
    die();
}
?>