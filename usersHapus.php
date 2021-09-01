<?php
session_start();
include "./config/koneksi.php";
include "./config/flash.php";

// pengecekan jika query string tidak ada
if (!isset($_GET['id'])) {
    flash("notif", "Maaf Id Tidak ditemukan", "yellow");
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: users.php?keterangan=maafidtidakditemukan");
    exit();
}

// jika id sesuai dengan yang login
if ($_GET['id']===$_SESSION['ssIdUser']) {
    flash("notif", "Maaf Id Tidak Bisa DiHapus", "red");
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: users.php?keterangan=maafidtidakbisadiedit");
    exit();
}

$sql = "DELETE FROM tabelUser WHERE idUser='$_GET[id]'";
mysqli_query($conn, $sql);
$hasil = mysqli_affected_rows($conn); //1 / -1
if ($hasil === 1) {
    flash("notif", "Data User Berhasil Di Hapus.", "green");
    header("Location: users.php?keterangan=berhasil");
    exit();
} else {
    flash("notif", "Data Gagal Di Rubah. Silahkan Ulangi Lagi", "red");
}
?>