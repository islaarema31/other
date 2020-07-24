<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $id_user = $_POST['id_user'];
  $id_point = $_POST['id_point'];

  // include database connection file
  include_once("../connect.php");

  // Insert user data into table
  $result = mysqli_query($connect, "INSERT INTO main_report(id_user,id_point) VALUES('$id_user','$id_point')");

  // Show message when user added
  echo "User added successfully. <a href='index.php'>View Users</a>";
}
