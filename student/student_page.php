<?php include 'header.php' ?>
<h1>Student Page</h1>

<p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<a href="../logout.php">LOGOUT</a>

<br />
<br />
<?php
$email = $_SESSION['email'];
include '../connect.php';
$check = mysqli_query($connect, "select name,identity from user where email='$email'");
$data = mysqli_fetch_assoc($check);
echo $data['name'];
echo "<br>";
echo $data['identity'];
?>
</body>

</html>