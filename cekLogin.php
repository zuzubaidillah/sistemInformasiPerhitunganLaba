<?php
session_start();
include './config/koneksi.php';
include "./config/flash.php";

// var_dump($_POST);die();
$u = htmlspecialchars($_POST['username'], ENT_QUOTES);
$p = htmlspecialchars($_POST['password'], ENT_QUOTES);

$sql = "SELECT idUser, username, password FROM tabelUser WHERE username='$u'";
$hasil = mysqli_query($conn, $sql);
$count = mysqli_num_rows($hasil);
// var_dump($count);die();
if ($count >= 1) {
    // cek password
    $result = mysqli_fetch_array($hasil);
    // var_dump($result['password']);die();
    if (password_verify($p, $result['password'])) {
        session_start();
        $_SESSION["ssIdUser"] = $result['idUser'];
        $_SESSION["ssUsername"] = $result['username'];
        flash("notif", "Selamat Datang DiHalaman Admin! $_SESSION[ssUsername]", "green");
        echo "<script>
            window.location = 'index.php?keterangan=berhasilLogin';
        </script>";
    }else{
        flash("notif_password", "Password Salah!", "red");
        echo "<script>
            window.location = 'index.php';
        </script>";
    }
}else{
    flash("notif_username", "Username Salah!", "red");
    echo "<script>
        window.location = 'index.php';
    </script>";
}
// cekusername apakah sudah sesuai database
