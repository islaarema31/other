<?php
// koneksi database
include '../connect.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($connect, "delete from user where id_user='$id'");

// mengalihkan halaman kembali ke index.php
header("location:admin_page.php");
?>