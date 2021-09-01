<?php
session_start();
include "./config/koneksi.php";
include "./config/flash.php";
// var_dump($_GET);
// pengecekan jika query string tidak ada
if (!isset($_GET['id'])) {
    flash("notif", "Maaf Id Tidak ditemukan", "yellow");
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: users.php?keterangan=maafidtidakditemukan");
    exit();
}

// pengecekan query string ID
$sqlUsers = mysqli_query($conn, "SELECT * FROM tabelUser WHERE idUser='$_GET[id]'");
$countUser = mysqli_num_rows($sqlUsers);
// pengecekan jika query string tidak ada
if ($countUser >= 1) {
    $rowUser = mysqli_fetch_array($sqlUsers);
} else {
    flash("notif", "Maaf Id Tidak sesuai database", "yellow");
    // mengirim header HTTP untuk melakukan registrasi
    header("Location: users.php?keterangan=maafidtidakditemukan");
    exit();
}

if (isset($_POST['namaDepan'])) {

    $namaDepan = htmlspecialchars($_POST['namaDepan'], ENT_QUOTES);
    $namaBelakang = htmlspecialchars($_POST['namaBelakang'], ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm'], ENT_QUOTES);

    $sqlUsers = mysqli_query($conn, "SELECT username FROM tabelUser WHERE username='$username' AND idUser!='$_GET[id]'");
    $countUser = mysqli_num_rows($sqlUsers);
    // username apakah sudah digunakan
    if ($countUser >= 1) {
        // diharuskan perubahan username
        flash("notif_username", "Username $username sudah digunakan.", "red");
    } else {
        if ($password === $passwordConfirm) {
            // lanjut ke upadte data
            $tanggalDiRubah = date('Y-m-d H:i:s');
            // cek apakah password diisi
            if ($password!=='') {
                // encripsi password
                $passwordEngkripsi = password_hash($password, PASSWORD_DEFAULT);
                // update password juga
                $sql = "UPDATE tabelUser SET namaDepan='$namaDepan', namaBelakang='$namaBelakang', username='$username', password='$passwordEngkripsi', tanggalDiRubah='$tanggalDiRubah' WHERE idUser='$_GET[id]'";
                mysqli_query($conn, $sql);
                $hasil = mysqli_affected_rows($conn); //1 / -1
                $jenis = 'dengan merubah password';
            } else {
                // update tidak memakai password
                $sql = "UPDATE tabelUser SET namaDepan='$namaDepan', namaBelakang='$namaBelakang', username='$username', tanggalDiRubah='$tanggalDiRubah' WHERE idUser='$_GET[id]'";
                mysqli_query($conn, $sql);
                $hasil = mysqli_affected_rows($conn); //1 / -1
                $jenis = '';
            }

            if ($hasil === 1) {
                flash("notif", "Data User Berhasil Di Rubah. $jenis", "green");
                header("Location: users.php?keterangan=berhasil");
                exit();
            } else {
                flash("notif", "Data Gagal Di Rubah. Silahkan Ulangi Lagi", "red");
            }
        }else{
            flash("notif_password", "Password tidak sama.", "red");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data User</title>
    <style>
        /* table, tr, td, th {
            border: 1px solid black;
        } */
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h2>Edit Data User (perubahan data pengguna)</h2>
        </header>
        <nav style="border: 1px solid black; margin-bottom: 5px;">
            <!-- <h3>menu</h3> -->
            <ul style="display: flex;">
                <li style="padding-right: 20px;"><a href="index.php">Dashboard</a></li>
                <li style="padding-right: 20px;"><a href="barang.php">Data Barang</a></li>
                <li style="padding-right: 20px;"><a href="transaksi.php">Transaksi</a></li>
                <li style="padding-right: 20px;"><a href="laporan.php">Laporan</a></li>
                <li style="padding-right: 20px; background: #c1c1c1;"><a href="users.php">Users</a></li>
                <li style="padding-right: 20px;"><a href="logout.php">LogOut</a></li>
            </ul>
        </nav>
        <!-- <br> -->
        <article>
            <form action="" method="post">
                <table style="border-collapse: collapse">
                    <thead>
                        <tr>
                            <td>Nama Depan</td>
                            <td>
                                <input value="<?= $rowUser['namaDepan']; ?>" required name="namaDepan" type="text" placeholder="isi nama depan" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td>
                                <input value="<?= $rowUser['namaBelakang']; ?>" required name="namaBelakang" type="text" placeholder="isi nama belakang">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php
                                if (flash("notif_username")) {
                                    echo flash('notif_username');
                                };
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input value="<?= $rowUser['username']; ?>" required name="username" type="text" placeholder="masukan username">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php
                                if (flash("notif_password")) {
                                    echo flash('notif_password');
                                };
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <small>*jika tidak ingin mengganti password silahkan di kosongi</small><br>
                                <input name="password" type="password" placeholder="password">
                            </td>
                        </tr>
                        <tr>
                            <td>Ulangi Password</td>
                            <td>
                                <input name="passwordConfirm" type="password" placeholder="password">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit">Update</button>
                                <button type="reset">Ulangi</button>
                            </td>
                        </tr>
                    </thead>
                </table>
            </form>
        </article>
        <footer>
            <h4>Sistem Informasi Perhitungan Laba</h4>
            <p>developerBy - Mohammad Zuz Ubaidillah</p>
        </footer>
    </main>
</body>

</html>