<?php
// session merupakan data yang disimpan dalam suatu server yang dapat digunakan secara global di server tersebut
session_start();
if (!$_SESSION['ssIdUser']) {
    // mengirim header HTTP
    header("Location: login.php?keterangan=andaHarusLogindahulu");
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
        table, tr, td, th {
            border: 1px solid black;
        }
        td, th {
            padding: 10px;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h2>Laporan Transaksi</h2>
        </header>
        <nav style="border: 1px solid black; margin-bottom: 5px;">
            <!-- <h3>menu</h3> -->
            <ul style="display: flex;">
                <li style="padding-right: 20px;"><a href="index.php">Dashboard</a></li>
                <li style="padding-right: 20px;"><a href="barang.php">Data Barang</a></li>
                <li style="padding-right: 20px;"><a href="transaksi.php">Transaksi</a></li>
                <li style="padding-right: 20px; background: #c1c1c1;"><a href="laporan.php">Laporan</a></li>
                <li style="padding-right: 20px;"><a href="users.php">Users</a></li>
                <li style="padding-right: 20px;"><a href="logout.php">LogOut</a></li>
            </ul>
        </nav>
        <!-- <br> -->
        <article>
            <table style="
            margin-bottom: 5px;
            border-collapse: collapse;
            background: #00b3b3;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            ">
                <thead>
                    <tr>
                        <td colspan="3">Berdasarkan Tanggal</td>
                    </tr>
                    <tr>
                        <td>Pilih Tanggal Awal</td>
                        <td></td>
                        <td>Pilih Tanggal Awal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="date" name="">
                        </td>
                        <td>
                            >
                        </td>
                        <td>
                            <input type="date" name="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button>Proses</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table width="100%" style="border-collapse: collapse">
                <thead>
                    <tr style="background: #e6eeff;">
                        <th style="width: 5%;">No</th>
                        <th style="width: 25%;">User</th>
                        <th style="width: 20%;">Jumlah</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 15%;">Total</th>
                        <th style="width: 10%;">-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rukmana</td>
                        <td style="text-align: center;">10 Barang</td>
                        <td>02 Agustus 2021</td>
                        <td style="text-align: right;">Rp. 50.000,-</td>
                        <td style="text-align: center;">
                            <a style="background-color: #b3ccff; padding: 5px; color: black;" href="editUser.php">Print</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Zuz</td>
                        <td style="text-align: center;">3 Barang</td>
                        <td>10 Agustus 2021</td>
                        <td style="text-align: right;">Rp. 10.000,-</td>
                        <td style="text-align: center;">
                            <a style="background-color: #b3ccff; padding: 5px; color: black;" href="editUser.php">Print</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rukmana</td>
                        <td style="text-align: center;">44 Barang</td>
                        <td>20 Agustus 2021</td>
                        <td style="text-align: right;">Rp. 140.000,-</td>
                        <td style="text-align: center;">
                            <a style="background-color: #b3ccff; padding: 5px; color: black;" href="editUser.php">Print</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </article>
        <footer>
            <h4>Sistem Informasi Perhitungan Laba</h4>
            <p>developerBy - Mohammad Zuz Ubaidillah</p>
        </footer>
    </main>
</body>

</html>