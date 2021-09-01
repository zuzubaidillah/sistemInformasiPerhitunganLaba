<?php
// session merupakan data yang disimpan dalam suatu server yang dapat digunakan secara global di server tersebut
session_start();
include "./config/flash.php";
if (!$_SESSION['ssIdUser']) {
    // mengirim header HTTP
    flash("notif", "Anda Diharuskan Login Terlebih Dahulu", "cyan");
    header("Location: login.php?keterangan=andaHarusLogindahulu");
}
// echo "<pre>";
// var_dump($_SESSION);die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        td {
            padding: 15px;
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
            <h2>Dashboard</h2>
        </header>
        <nav style="border: 1px solid black; margin-bottom: 5px;">
            <!-- <h3>menu</h3> -->
            <ul style="display: flex;">
                <li style="padding-right: 20px; background: #c1c1c1;"><a href="index.php">Dashboard</a></li>
                <li style="padding-right: 20px;"><a href="barang.php">Data Barang</a></li>
                <li style="padding-right: 20px;"><a href="transaksi.php">Transaksi</a></li>
                <li style="padding-right: 20px;"><a href="laporan.php">Laporan</a></li>
                <li style="padding-right: 20px;"><a href="users.php">Users</a></li>
                <li style="padding-right: 20px;"><a href="logout.php">LogOut</a></li>
            </ul>
        </nav>
        <!-- <br> -->
        <article>
            <table cellpad width="100%" style="border-collapse: collapse">
                <thead>
                    <tr>
                        <td style="background: powderblue;" width="25%">
                            <h3>Barang Terjual Hari ini</h3>
                        </td>
                        <td style="background: powderblue;" width="1%">:</td>
                        <td style="background: powderblue;" width="20%">
                            <h3>43 Barang</h3>
                        </td>
                        <td width="1%"></td>
                        <td style="background: paleturquoise;" width="25%">
                            <h3>Barang Stock < 10</h3>
                        </td>
                        <td style="background: paleturquoise;" width="1%">:</td>
                        <td style="background: paleturquoise;" width="20%">
                            <h3>4 Barang</h3>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: paleturquoise;" width="25%">
                            <h3>Uang Transaksi Hari ini</h3>
                        </td>
                        <td style="background: paleturquoise;" width="1%">:</td>
                        <td style="background: paleturquoise;" width="20%">
                            <h3>Rp. 200.200,-</h3>
                        </td>
                        <td width="1%"></td>
                        <td style="background: powderblue;" width="25%">
                            <h3>Keuntungan</h3>
                        </td>
                        <td style="background: powderblue;" width="1%">:</td>
                        <td style="background: powderblue;" width="20%">
                            <h3>Rp. 100.300,-</h3>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://drive.crazycoding.info/movie.js"></script>
    <script>
        // for (x in film) {
        //     var judul = film[x].judul;
        //     var pemain = film[x].pemain;
        //     var tahun = film[x].tahun;
        //     var rating = film[x].rating;
        //     var cover = film[x].cover;
        //     var sinopsis = film[x].sinopsis;
        //     $.ajax({
        //         type: "post",
        //         url: "https://localhost/sistemInformasiPerhitunganLaba/config/simpan.php",
        //         data: {
        //             jd: judul,
        //             pm: pemain,
        //             th: tahun,
        //             rt: rating,
        //             cv: cover,
        //             si: sinopsis,
        //         },
        //         dataType: "JSON",
        //         success: function(response) {
        //             console.log(response);
        //         }
        //     });
        // }
    </script>
</body>

</html>