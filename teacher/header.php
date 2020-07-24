<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <title>Teacher Page</title>
</head>

<body>
    <?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] != "teacher") {
        header("location:javascript://history.go(-1)");
    }
    ?>
    <a class="btn btn-primary" href="teacher_page.php" role="button">Home</a>
    <a class="btn btn-primary" href="report.php" role="button">Report</a>
    <a class="btn btn-primary" href="list_point.php" role="button">Points</a>
    <a class="btn btn-primary" href="list_student.php" role="button">Students</a>
    <a class="btn btn-primary" href="history.php" role="button">History</a>
    <a href="../logout.php">LOGOUT</a>