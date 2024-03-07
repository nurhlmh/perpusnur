<?php
include 'layout/header.php';
?>

<div class="container">

    <?php

    include '../koneksi/koneksi.php';

    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    $user = mysqli_query($koneksi, "SELECT * FROM user");
    $pinjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

    $b = mysqli_num_rows($buku);
    $u = mysqli_num_rows($user);
    $p = mysqli_num_rows($pinjaman);

    ?>
    <div class="row">
        <div class="col-sm-6" style="margin-top: 5rem;">
            <h2>SELAMAT DATANG</h2>
            <h3>Di Halaman Peminjam</h3>
            <h6>Membaca adalah Jendela Dunia</h6>
        </div>
        <div class="col-sm-6">
            <img src="../asset/img/book.jpg" width="500" alt="">
        </div>

        <?php
        include 'layout/footer.php';
        ?>