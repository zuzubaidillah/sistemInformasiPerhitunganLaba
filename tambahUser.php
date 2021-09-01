<?php
session_start();
include "./config/koneksi.php";
include "./config/flash.php";

if (isset($_POST['namaDepan'])) {
    $namaDepan = htmlspecialchars($_POST['namaDepan'], ENT_QUOTES);
    $namaBelakang = htmlspecialchars($_POST['namaBelakang'], ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm'], ENT_QUOTES);

    $sqlUsers = mysqli_query($conn, "SELECT username FROM tabelUser WHERE username='$username'");
    $countUser = mysqli_num_rows($sqlUsers);
    // cek dulu kira2 hasil yang dikeluarkan dari tabel user

    // pengecekan apakah username sudah digunakan?
    if (!$countUser) {
        // simpan
        // pengecekan password
        if ($password === $passwordConfirm) {
            // proses simpan data
            // pembuatan id secara otomatis
            $idUser = mt_rand(342312, 6329453);
            $tanggalDiBuat = date('Y-m-d H:i:s');

            // encripsi password
            $passwordEngkripsi = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO tabelUser (`idUser`,`namaDepan`, `namaBelakang`, `username`, `password`, `tanggalDiBuat`, `tanggalDiRubah`) VALUES ('$idUser', '$namaDepan', '$namaBelakang', '$username', '$passwordEngkripsi','$tanggalDiBuat','$tanggalDiBuat')";
            mysqli_query($conn, $sql);
            $hasil = mysqli_affected_rows($conn); //1 / -1

            if ($hasil === 1) {
                flash("notif", "Data User Berhasil Di Simpan.", "green");
                header("Location: users.php?keterangan=berhasil");
                exit();
            } else {
                flash("notif", "Data Gagal Di Simpan. Silahkan Ulangi Lagi", "red");
            }
        } else {
            flash("notif_password", "Password tidak sama.", "red");
        }
    } else {
        // notifikasi username sudah digunakan
        flash("notif_username", "Username $username sudah digunakan.", "red");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <h2>Tambah Data User (pengguna baru)</h2>
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
                                <input required name="namaDepan" type="text" placeholder="isi nama depan" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td>
                                <input required name="namaBelakang" type="text" placeholder="isi nama belakang">
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
                                <input required name="username" type="text" placeholder="masukan username">
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
                                <input required  name="password" type="password" placeholder="password">
                            </td>
                        </tr>
                        <tr>
                            <td>Ulangi Password</td>
                            <td>
                                <input required  name="passwordConfirm" type="password" placeholder="password">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit">Simpan</button>
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