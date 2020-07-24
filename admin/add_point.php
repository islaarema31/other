<?php
require_once("../connect.php");
$name = $_POST['name'];
$amount = $_POST['amount'];
$sql = "SELECT * FROM 'point' WHERE 'name' = '$name'";
$query = $connect->query($sql);
if ($query->num_rows != 0) {
  echo "<div align='center'>Point already registered! <a href='register.php'>Back</a></div>";
} else {
  if ((!empty($name)) && (!empty($amount))) {
    echo "<div align='center'>There is still empty data! <a href='register.php'>Back</a>";
  } else {
    $data = "INSERT INTO 'point' () VALUES (NULL,'$name', '$amount')";
    $save = $connect->query($data);
    if ($save) {
      echo "<div align='center'>Registration Successful, Please <a href='index.php'>Login</a></div>";
    } else {
      echo "<div align='center'>Process Failed!</div>";
    }
  }
}

// mengalihkan halaman kembali ke index.php
// header("location:list_point.php");
?>