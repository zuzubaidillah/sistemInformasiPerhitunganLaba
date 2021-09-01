<?php
session_start();
// menghapus session semua
session_destroy();
// menghapus session secara spesifikasi
// unset($_SESSION['ssIdUser']);
header('Location: login.php?keterangan=BerhasilMelakukanLogOut');
?>