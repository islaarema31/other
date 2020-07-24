<?php
   require_once("connect.php");
   $email = $_POST['email'];
   $name = $_POST['name'];
   $pass = md5($_POST['password']);
   $class = $_POST['class'];
   $ident = $_POST['identity'];
   $sql = "SELECT * FROM user WHERE email = '$email'";
   $query = $connect->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Email already registered! <a href='register.php'>Back</a></div>";
   } else {
    if((!empty($email)) && (!empty($nama)) && (!empty($password))) {
       echo "<div align='center'>There is still empty data! <a href='register.php'>Back</a>";
     } else {
       $data = "INSERT INTO user () VALUES (NULL,'$email', '$name', '$pass', 'user', '$class', '$ident')";
       $data1 = "INSERT INTO user_trash () VALUES (NULL,'$email', '$name', '$pass', 'user', '$class', '$ident')";
       $save = $connect->query($data);
       $save1 = $connect->query($data1);
       if($save) {
         echo "<div align='center'>Registration Successful, Please <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Process Failed!</div>";
       }
     }
   }
?>