<?php
session_start();
include "./config/koneksi.php";
include "./config/flash.php";
// var_dump($_SESSION);die();
// cek tabel user
$rowUser = mysqli_query($conn, "SELECT * FROM tabelUser");
$countUser = mysqli_num_rows($rowUser);
if ($countUser>0) {
    flash("notif", "silahkan Lakukan Login", "cyan");
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: login.php?keterangan=silahkanLakukanLogin");
    exit();
}
// cek dulu kira2 hasil yang dikeluarkan dari tabel user
// var_dump($countUser);die();
if (isset($_POST['namaDepan'])) {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    // die();
    $namaDepan = htmlspecialchars($_POST['namaDepan'], ENT_QUOTES);
    $namaBelakang = htmlspecialchars($_POST['namaBelakang'], ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm'], ENT_QUOTES);

    // pengecekan password
    if ($password === $passwordConfirm) {
        // proses simpan data
        // pembuatan id secara otomatis
        $idUser = mt_rand(342312,6329453);
        $tanggalDiBuat = date('Y-m-d H:i:s');

        // encripsi password
        $passwordEngkripsi = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tabelUser (`idUser`,`namaDepan`, `namaBelakang`, `username`, `password`, `tanggalDiBuat`, `tanggalDiRubah`) VALUES ('$idUser', '$namaDepan', '$namaBelakang', '$username', '$passwordEngkripsi','$tanggalDiBuat','$tanggalDiBuat')";
        // $sql = "INSERT INTO tabelUser VALUES ($idUser, '$namaDepan', '$namaBelakang', '$username', '$passwordEngkripsi','$tanggalDiBuat','$tanggalDiBuat')";
        mysqli_query($conn, $sql);
        $hasil = mysqli_affected_rows($conn); //1 / -1

        if ($hasil === 1) {
            // echo "<script>
            //     alert('Berhasil Disimpan');
            // </script>";
            flash("notif", "Data User Berhasil Di Simpan.", "green");
            // echo '<meta http-equiv="refresh" content="0.1;url=https://localhost/sisteminformasiperhitunganlaba/login.php" />';
            header("Location: login.php?keterangan=silahkanLakukanLogin");
            exit();
        }else{
            // echo "<script>
            //     alert('Gagal Disimpan');
            // </script>";
            flash("notif", "Data Gagal Di Simpan. Silahkan Ulangi Lagi", "red");
        }
    }else{
        flash("notif_password", "Password tidak sama.", "red");
        // echo "<script>alert('Password tidak sama');</script>";
        // $notifikasiPassword = "Password tidak sama";
    }
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
    <header>
        <?php
        if (flash("notif")) {
            echo flash('notif');
        };
        ?>
    </header>
    <form action="" method="POST" width="50%">
        <table>
            <thead>
                <tr>
                    <td colspan="3"><h1>REGISTRASI</h1></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label style="color: white;" for="">Nama depan salah</label></td>
                </tr>
                <tr>
                    <td>Nama depan</td>
                    <td>:</td>
                    <td><input required name="namaDepan" type="text" placeholder="masukan nama bagian depan" autofocus></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label style="color: white;" for="">Nama belakang salah</label></td>
                </tr>
                <tr>
                    <td>Nama belakang</td>
                    <td>:</td>
                    <td><input required name="namaBelakang" type="text" placeholder="masukan nama bagian belakang" ></td>
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
                    <td>
                        <label>
                        <?php
                        // if (isset($notifikasiPassword)) {
                        //     echo $notifikasiPassword;
                        // }
                        if (flash("notif_password")) {
                            echo flash('notif');
                        };
                        ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input required name="password" type="text" placeholder="masukan Password"></td>
                </tr>
                <tr>
                    <td>Ulangi Password</td>
                    <td>:</td>
                    <td><input required name="passwordConfirm" type="text" placeholder="masukan Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">Simpan</button>
                        <button type="reset">Ulangi</button>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
</body>
</html>