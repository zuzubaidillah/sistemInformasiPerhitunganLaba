<?php
// var_dump($_SERVER);die();
include "./config/koneksi.php";
// cek tabel user
$rowUser = mysqli_query($conn, "SELECT * FROM tabelUser");
$countUser = mysqli_num_rows($rowUser);
// cek dulu kira2 hasil yang dikeluarkan dari tabel user
// var_dump($countUser);die();
if (!$countUser) {
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: registrasi.php?keterangan=andaHarusRegitrasiKarenaDataUsersMasihKosong");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <form action="cekLogin.php" method="POST">
        <table>
            <thead>
                <tr>
                    <td colspan="3"><h1>LOGIN</h1></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label style="color: white;" for="">username salah</label></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input required name="username" type="text" placeholder="masukan Username" autofocus></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label style="color: white;" for="">password salah</label></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input required name="password" type="text" placeholder="masukan Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Masuk</button></td>
                </tr>
            </thead>
        </table>
    </form>
</body>
</html>