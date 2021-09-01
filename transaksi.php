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
        body {
            padding-left: 10px;
            padding-right: 10px;
        }
        .tabel-information td {
            padding: 5px;
        }
        .tabel-detail tr{
            border: 1px solid black;
        }
        .tabel-detail td{
            border: 1px solid black;
            padding: 5px;
        }
        .tabel-detail th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h2>Transaksi Penjualan Barang</h2>
        </header>
        <nav style="border: 1px solid black; margin-bottom: 5px;">
            <!-- <h3>menu</h3> -->
            <ul style="display: flex;">
                <li style="padding-right: 20px;"><a href="index.php">Dashboard</a></li>
                <li style="padding-right: 20px;"><a href="barang.php">Data Barang</a></li>
                <li style="padding-right: 20px; background: #c1c1c1;"><a href="transaksi.php">Transaksi</a></li>
                <li style="padding-right: 20px;"><a href="laporan.php">Laporan</a></li>
                <li style="padding-right: 20px;"><a href="users.php">Users</a></li>
                <li style="padding-right: 20px;"><a href="logout.php">LogOut</a></li>
            </ul>
        </nav>
        <!-- <br> -->
        <article>
            <table class="tabel-information" width="100%" style="border-collapse: collapse">
                <thead>
                    <tr>
                        <td style="background: powderblue;" width="25%">
                            <h3>No. Transaksi</h3>
                        </td>
                        <td style="background: powderblue;" width="1%">:</td>
                        <td style="background: powderblue;" width="20%">
                            <h3>TRA-20210123</h3>
                        </td>
                        <td width="1%"></td>
                        <td style="background: paleturquoise;" width="25%">
                            <h3>User</h3>
                        </td>
                        <td style="background: paleturquoise;" width="1%">:</td>
                        <td style="background: paleturquoise;" width="20%">
                            <h3>Putri Della</h3>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: paleturquoise;" width="25%">
                            <h3>Tanggal Transaksi</h3>
                        </td>
                        <td style="background: paleturquoise;" width="1%">:</td>
                        <td style="background: paleturquoise;" width="20%">
                            <h3>Senin, 23 Agustus 2021</h3>
                        </td>
                        <td width="1%"></td>
                        <td style="background: powderblue;" width="25%">
                            <h3></h3>
                        </td>
                        <td style="background: powderblue;" width="1%"></td>
                        <td style="background: powderblue;" width="20%">
                            <h3></h3>
                        </td>
                    </tr>
                </thead>
            </table>
            <br>
            <table width="100%">
                <thead>
                    <tr>
                        <th width="20%" style="text-align: left;">Nama Barang</th>
                        <th width="10%" style="text-align: left;">Stock</th>
                        <th width="10%" style="text-align: left;">Harga</th>
                        <th width="5%" style="text-align: left;">Jumlah?</th>
                        <th width="15%" style="text-align: left;">-</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="" id="">
                                <option value="">Coklat</option>
                                <option value="">Oreo Coklat</option>
                                <option value="">Jagung Bakar</option>
                                <option value="">Wafer Coklat</option>
                                <option value="">BearBrand</option>
                            </select>
                        </td>
                        <td>
                            <label for="">40</label>
                        </td>
                        <td>
                            <label for="">2.000</label>
                        </td>
                        <td>
                            <input type="text" value="2">
                        </td>
                        <td>
                            <a style="background-color: green; padding: 5px; color: black;" href="#">Tambah</a>
                        </td>
                    </tr>
                </thead>
            </table>
            <br>
            <table class="tabel-detail" width="100%" style="border-collapse: collapse">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Detail Tran.</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Det-20210102001</td>
                        <td>Oreo Coklat</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: right;">8.000</td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="#">Edit</a>
                            <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Det-20210102002</td>
                        <td>Jagung Bakar</td>
                        <td style="text-align: center;">4</td>
                        <td style="text-align: right;">2.000</td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="#">Edit</a>
                            <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="#">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td style="text-align: center;" colspan="1">
                            <h3>5</h3>
                        </td>
                        <td  style="text-align: right;">
                            <h3>10.000</h3>
                        </td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td style="text-align: right;" colspan="1">
                            <h3>Uang Bayar</h3>
                        </td>
                        <td  style="text-align: right;">
                            <input type="text" value="10000">
                        </td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td style="text-align: right;" colspan="1">
                            <h3>Uang Kembali</h3>
                        </td>
                        <td  style="text-align: right;">
                            <input type="text" value="0">
                        </td>
                        <td>
                            <button>
                                Proses
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <table class="tabel-detail" width="100%" style="border-collapse: collapse">
                <thead>
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