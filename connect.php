<?php
$connect = mysqli_connect("localhost", "root", "", "other");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to Connect : " . mysqli_connect_error();
}
?>