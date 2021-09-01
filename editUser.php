<?php
// session merupakan data yang disimpan dalam suatu server yang dapat digunakan secara global di server tersebut
// session_start();
// if (!$_SESSION['ssIdUser']) {
//     // mengirim header HTTP
//     header("Location: login.php?keterangan=andaHarusLogindahulu");
// }
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
            <form action=""></form>
            <table style="border-collapse: collapse">
                <thead>
                    <tr>
                        <td></td>
                        <td><label style="color: white;" for="">nama barang harus di isi</label></td>
                    </tr>
                    <tr>
                        <td>Nama Depan</td>
                        <td>
                            <input required name="" type="text" placeholder="isi nama depan" autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="color: white;" for="">nama barang harus di isi</label></td>
                    </tr>
                    <tr>
                        <td>Nama Belakang</td>
                        <td>
                            <input required name="" type="text" placeholder="isi nama belakang">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="color: red;" for="">username sudah digunakan</label></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input required name="" type="text" placeholder="masukan username">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label style="color: white;" for="">password tidak sama</label></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <small>*jika tidak ingin mengganti password silahkan di kosongi</small><br>
                            <input required name="" type="text" placeholder="password">
                        </td>
                    </tr>
                    <tr>
                        <td>Ulangi Password</td>
                        <td>
                            <input required name="" type="text" placeholder="password">
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
        </article>
        <footer>
            <h4>Sistem Informasi Perhitungan Laba</h4>
            <p>developerBy - Mohammad Zuz Ubaidillah</p>
        </footer>
    </main>
</body>

</html>