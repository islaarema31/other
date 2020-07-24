<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<?php include 'cssauto.php' ?>
</head>

<body>

	<!-- <h1>Membuat Login Multi User Level Dengan PHP dan MySQLi <br/> www.malasngoding.com</h1>
  -->
	<?php
	if (isset($_GET['message'])) {
		if ($_GET['message'] == "failed") {
			echo "<div class='alert'>Email and Password not correct !</div>";
		}
	}
	?>
	<!--  
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
  -->
	<form action="login_check.php" method="post">
		<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a href="register.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Daftar</a>
	</form>
</body>

</html>