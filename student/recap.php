<?php include 'header.php' ?>
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php include '../connect.php'; ?>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>
<?php
$email = $_SESSION['email'];
include '../connect.php';
$check = mysqli_query($connect, "select name,id_user from user where email='$email'");
$data = mysqli_fetch_assoc($check);
echo $data['name'];
echo "<br>";
echo $data['id_user'];
$idku = $data['id_user'];
?>
<table border="1">
    <tr>
        <th>Offense</th>
        <th>Amount</th>
        <th>Date</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        //$cari = $_GET['cari'];
        $data = mysqli_query($connect, "SELECT main_report.time , point.amount , point.name AS point 
        FROM main_report 
        INNER JOIN user ON user.id_user=main_report.id_user 
        INNER JOIN point ON point.id_point=main_report.id_point where main_report.id_user='$idku'");
    } else {
        $data = mysqli_query($connect, "SELECT main_report.time , point.amount , point.name AS point 
        FROM main_report 
        INNER JOIN user ON user.id_user=main_report.id_user 
        INNER JOIN point ON point.id_point=main_report.id_point where main_report.id_user='$idku'");
    }
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $d['point']; ?></td>
            <td><?php echo $d['amount']; ?></td>
            <td><?php echo $d['time']; ?></td>

        </tr>
    <?php
    }
    ?>
</table>
<?php
$data = mysqli_query($connect, "SELECT sum(point.amount) AS total
 FROM main_report 
 INNER JOIN user ON user.id_user=main_report.id_user 
 INNER JOIN point ON point.id_point=main_report.id_point where main_report.id_user='$idku'");
while ($d = mysqli_fetch_array($data)) {
?>
    Total : <?php echo $d['total']; ?>
<?php
}
?>
</body>

</html>
</body>

</html>