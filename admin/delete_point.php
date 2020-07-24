<?php
// koneksi database
include '../connect.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($connect, "delete from point where id_point='$id'");

// mengalihkan halaman kembali ke index.php
header("location:list_point.php");
?>