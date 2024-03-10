<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
if(isset($_POST['update']))
{
$id = $_POST['IDbuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];

 
// update data ke database
$query = mysqli_query($koneksi,"UPDATE buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', 
                        tahunterbit='$tahunterbit'  where IDbuku='$id'");
if($query) {
    header("location:../buku.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
    }
}
?>