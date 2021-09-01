<?php
session_start();
include "./config/koneksi.php";
include "./config/flash.php";
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
            <?php
            if (flash("notif")) {
                echo flash('notif');
            };
            ?>
            <h2>Data Users (pengguna)</h2>
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
            <a href="tambahUser.php">
                Tambah User
            </a>
            <table cellpad width="100%" style="border-collapse: collapse">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 25%;">Nama</th>
                        <th style="width: 20%;">Username</th>
                        <th style="width: 15%;">Tanggal DiBuat</th>
                        <th style="width: 15%;">Tanggal DiUbah</th>
                        <th style="width: 10%;">-</th>
                    </tr>
                    <?php
                        $sqlUsers = mysqli_query($conn, "SELECT * FROM tabelUser ORDER BY tanggalDiBuat DESC");
                        $no = 1;
                        while($rowUsers = mysqli_fetch_array($sqlUsers)){
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $rowUsers['namaDepan']; ?> <?= $rowUsers['namaBelakang']; ?></td>
                        <td><?= $rowUsers['username']; ?></td>
                        <td style="text-align: right;"><?= $rowUsers['tanggalDiBuat']; ?></td>
                        <td style="text-align: right;"><?= $rowUsers['tanggalDiRubah']; ?></td>
                        <td>
                            <a style="background-color: yellow; padding: 5px; color: black;" href="editUser.php?id=<?=$rowUsers['idUser'];?>">Edit</a>
                            <!-- seleksi ketika baris user yang sedang login maka tidak ditampilkan -->
                            <?php
                            if ($rowUsers['idUser']!==$_SESSION['ssIdUser']) {
                            ?>
                                <a style="background-color: red; padding: 5px; color: black;" onclick="return confirm('Yakin DiHapus?')" href="usersHapus.php?id=<?=$rowUsers['idUser'];?>">Hapus</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                        $no++;
                        }
                    ?>
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