<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $data = mysqli_query($connect, "select * from user where name like '%" . $cari . "%'");
} else {
    $data = mysqli_query($connect, "select * from user");
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