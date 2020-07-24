<?php include 'connect.php'; ?>
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Level</th>
        <th>Class</th>
        <th>Unique Number</th>
        <?php if ($_SESSION['level'] == "admin") { ?><th>Option</th><?php } ?></th>
    </tr>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        if ($_SESSION['level'] == "admin") {
            $data = mysqli_query($connect, "select * from user where name like '%" . $cari . "%'");
        } else {
            $data = mysqli_query($connect, "select * from user where name like '%" . $cari . "%' AND level ='student'");
        }
        $cari = $_GET['cari'];
    } else if ($_SESSION['level'] == "admin") {
        $data = mysqli_query($connect, "select * from user");
    } else {
        $data = mysqli_query($connect, "select * from user where level='student'");
    }
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $d['id_user']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['name']; ?></td>
            <td><?php echo $d['level']; ?></td>
            <td><?php echo $d['class']; ?></td>
            <td><?php echo $d['identity']; ?></td>
            <?php if ($_SESSION['level'] == "admin") { ?>
                <td>
                    <a href="update.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['id_user']; ?>">DELETE</a>
                </td>
            <?php } ?>
        </tr>
    <?php
    } ?>
</table>