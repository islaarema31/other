<?php
// koneksi database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_point'];
$name = $_POST['name'];
$amount = $_POST['amount'];

// update data ke database
mysqli_query($connect, "update point set name='$name', amount='$amount' where id_point='$id'");
// mengalihkan halaman kembali ke index.php
header("location:list_point.php");
