<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] != "admin") {
        header("location:javascript://history.go(-1)");
    }

    ?>