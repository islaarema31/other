<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'connect.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"select * from user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		header("location: admin/admin_page.php");
 
	}else if($data['level']=="teacher"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "teacher";
		header("location: teacher/teacher_page.php");
 
	}else if($data['level']=="student"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "student";
		header("location:student/student_page.php");
 
    }else if($data['level']=="user"){
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['identity'] = $identity;
	    $_SESSION['level'] = "user";
        header("location:user_page.php");
        
	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?message=failed");
	}	
}else{
    header("location:index.php?message=failed");
    
}
?>