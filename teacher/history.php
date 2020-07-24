<?php include 'header.php'; ?>
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

<table border="1">
    <tr>
        <th>Date</th>
        <th>Student</th>
        <th>Offense</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        //$cari = $_GET['cari'];
        $data = mysqli_query($connect, "SELECT main_report.time , user.name AS student, point.name AS point
        FROM main_report
        INNER JOIN user ON user.id_user=main_report.id_user
        INNER JOIN point ON point.id_point=main_report.id_point
        ORDER BY main_report.time DESC");
    } else {
        $data = mysqli_query($connect, "SELECT main_report.time , user.name AS student, point.name AS point
        FROM main_report
        INNER JOIN user ON user.id_user=main_report.id_user
        INNER JOIN point ON point.id_point=main_report.id_point
         ORDER BY main_report.time DESC");
    }
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $d['student']; ?></td>
            <td><?php echo $d['point']; ?></td>
            <td><?php echo $d['time']; ?></td>

        </tr>
    <?php
    }
    ?>
</table>
<a href="print.php" ;>Print</a>
</body>

</html>