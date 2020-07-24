<?php
// koneksi database
include '../connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_user'];
$email = $_POST['email'];
$name = $_POST['name'];
$level = $_POST['level'];
$class = $_POST['class'];
$ident = $_POST['identity'];

// update data ke database
mysqli_query($connect, "update user set email='$email', name='$name', level='$level', class='$class', 
identity='$ident' where id_user='$id'");
mysqli_query($connect, "update user_trash set email='$email', name='$name', level='$level', class='$class', 
identity='$ident' where id_user='$id'");
// mengalihkan halaman kembali ke index.php
header("location:admin_page.php");
?>