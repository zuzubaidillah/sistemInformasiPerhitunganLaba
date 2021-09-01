<?php
include 'koneksi.php';

$jd = $_POST['jd'];
$pm = $_POST['pm'];
$th = $_POST['th'];
$rt = $_POST['rt'];
$cv = $_POST['cv'];
$si = $_POST['si'];

$sql = "INSERT INTO tabelFilms (`judul`,`pemain`,`tahun`,`rating`,`cover`,`sinopsis`) VALUES ('$jd','$pm','$th','$rt','$cv','$si')";
// $pro = mysqli_query($conn, $sql);
$pro ='';
$h = 0;
if ($pro) {
    $h = 1;
}
echo json_encode($pro);
?>