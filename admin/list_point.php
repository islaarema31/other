<?php include 'header.php' ?>
<a href="admin_page.php">Home</a>
<br /><br />

<form action="list_point.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type="number" name="amount"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // include database connection file
    include_once("../connect.php");
    // Insert user data into table
    $sql = "SELECT * FROM point WHERE name = '$name'";
    $query = $connect->query($sql);
    if ($query->num_rows != 0) {
        echo "<strong>ALREADY AVAILABLE!</strong>";
    } else {
        $result = mysqli_query($connect, "INSERT INTO point (name,amount) VALUES('$name','$amount')");
        if ($result) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }
}
// Show message when user added
// echo "User added successfully. <a href='index.php'>View Users</a>";
?>
<?php include '../tb_point.php' ?>
</body>

</html>