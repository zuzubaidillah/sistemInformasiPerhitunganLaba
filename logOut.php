<?php
session_start();
// session_destroy();
include "./config/flash.php";
// menghapus session semua
// menghapus session secara spesifikasi
unset($_SESSION['ssIdUser']);
unset($_SESSION['ssUsername']);
flash("notif", "Session telah Berakhir.....", "cyan");
header('Location: login.php?keterangan=BerhasilMelakukanLogOut');
exit();
?>