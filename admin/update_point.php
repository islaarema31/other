<!DOCTYPE html>
<html>

<head>
	<title>Update Point Page</title>
</head>

<body>
	<?php
	include '../connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($connect, "select * from point where id_point='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="run_edit_point.php">
			<table>
				<tr>
					<td>Name</td>
					<td>
						<input type="hidden" name="id_point" value="<?php echo $d['id_point']; ?>">
						<input type="text" name="name" value="<?php echo $d['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><input type="number" name="amount" value="<?php echo $d['amount']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SAVE"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>

</body>

</html>