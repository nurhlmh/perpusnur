<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['idbuku'];
 
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE from buku where IDbuku='$id'")or die(mysql_error());
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>