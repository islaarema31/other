<h1>LIST POINT</h1>
<?php include 'connect.php'; ?>
<form action="list_point.php" method="get">
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
		<th>Number</th>
		<th>Name</th>
		<th>Amount</th>
		<?php if ($_SESSION['level'] == "admin") { ?><th>Option</th><?php } ?></th>
	</tr>
	<?php
	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		$data = mysqli_query($connect, "select * from point where name like '%" . $cari . "%'");
	} else {
		$data = mysqli_query($connect, "select * from point");
	}
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?php echo $d['id_point']; ?></td>
			<td><?php echo $d['name']; ?></td>
			<td><?php echo $d['amount']; ?></td>
			<?php if ($_SESSION['level'] == "admin") { ?>
				<td>
					<a href="update_point.php?id=<?php echo $d['id_point']; ?>">EDIT</a>
					<a href="delete_point.php?id=<?php echo $d['id_point']; ?>">DELETE</a>
				</td>
			<?php } ?>

		</tr>
	<?php
	}
	?>
</table>