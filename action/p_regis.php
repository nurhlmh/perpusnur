<?php
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT into user(username,password,email,namalengkap, alamat, level)
                VALUES ('$username','$password','$email','$namalengkap','$alamat','$level')");

header("Location: ../index.php");
