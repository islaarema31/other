<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['email'])) {
  header('location:index.php');
}
?>
<?php include 'cssauto.php' ?>
<title>Register</title>
<div align='center'>
  <form action="register_confirm.php" method="post">
    <table>
      <tbody>
        <tr>
          <td colspan="2" align="center">
            <h1>Register</h1>
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td> : <input name="email" type="text"></td>
        </tr>
        <tr>
          <td>Name</td>
          <td> : <input name="name" type="text"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td> : <input name="password" type="password"></td>
        </tr>
        <tr>
          <td>Class</td>
          <td> : <input name="class" type="text"></td>
        </tr>
        <tr>
          <td>NIK/NIP</td>
          <td> : <input name="identity" type="text"></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">Already have an account ? <a href="index.php"><b>Login</b></a></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>

</html>