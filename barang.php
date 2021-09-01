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
        table, tr, td, th {
            border: 1px solid black;
        }
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h2>Data Barang</h2>
        </header>
        <nav style="border: 1px solid black; margin-bottom: 5px;">
            <!-- <h3>menu</h3> -->
            <ul style="display: flex;">
                <li style="padding-right: 20px;"><a href="index.php">Dashboard</a></li>
                <li style="padding-right: 20px; background: #c1c1c1;"><a href="barang.php">Data Barang</a></li>
                <li style="padding-right: 20px;"><a href="transaksi.php">Transaksi</a></li>
                <li style="padding-right: 20px;"><a href="laporan.php">Laporan</a></li>
                <li style="padding-right: 20px;"><a href="users.php">Users</a></li>
                <li style="padding-right: 20px;"><a href="logout.php">LogOut</a></li>
            </ul>
        </nav>
        <!-- <br> -->
        <article>
            <a href="tambahBarang.php">
                Tambah Barang
            </a>
            <table cellpad width="100%" style="border-collapse: collapse">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 25%;">Nama</th>
                        <th style="width: 20%;">Jenis</th>
                        <th style="width: 15%;">Harga Beli</th>
                        <th style="width: 15%;">Harga Jual</th>
                        <th style="width: 5%;">Stock</th>
                        <th style="width: 10%;">-</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cokolatos</td>
                        <td>Makanan</td>
                        <td style="text-align: right;">250,-</td>
                        <td style="text-align: right;">500,-</td>
                        <td>90</td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="editBarang.php">Edit</a>
                            <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BearBrand</td>
                        <td>Minuman</td>
                        <td style="text-align: right;">4.000,-</td>
                        <td style="text-align: right;">5.000,-</td>
                        <td>40</td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="editBarang.php">Edit</a>
                            <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Wafer Coklat</td>
                        <td>Makanan</td>
                        <td style="text-align: right;">1.500,-</td>
                        <td style="text-align: right;">2.000,-</td>
                        <td>30</td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="editBarang.php">Edit</a>
                            <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="#">Hapus</a>
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