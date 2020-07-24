<!DOCTYPE html>
<html>

<head>
	<title>Update Page</title>
</head>

<body>
	<?php
	include '../connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($connect, "select * from user where id_user='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="run_edit.php">
			<table>
				<tr>
					<td>Email</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
						<input type="email" name="email" value="<?php echo $d['email']; ?>">
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $d['name']; ?>"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="radio" id="user" name="level" value="user">
						<label for="male">User</label><br>
						<input type="radio" id="student" name="level" value="student">
						<label for="other">Student</label><br>
						<input type="radio" id="teacher" name="level" value="teacher">
						<label for="female">Teacher</label><br>
						<input type="radio" id="admin" name="level" value="admin">
						<label for="other">Admin</label></td>
				</tr>
				<tr>
					<td>Class</td>
					<td><input type="text" name="class" value="<?php echo $d['class']; ?>"></td>
				</tr>
				<tr>
					<td>Unique Number</td>
					<td><input type="text" name="identity" value="<?php echo $d['identity']; ?>"></td>
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