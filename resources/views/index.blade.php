<?php

include 'G:\installan\TUGAS TYO\. SEMESTER 6\PROYEK SISTEM INFORMASI\PROJECT_SI\alanisafoods\routes\koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
}

if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    $password = md5($_GET['password']);

    $sql = "SELECT * FROM pegawai WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: dashboard.php');
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> LOGIN ALANISAFOODS </title>
    <link rel="shortcut icon" href="{{ asset('img/logotoko2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/stylelogin.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <form action="/" method="get" class="index">
            <div class="title">Login Admin</div>
            <div class="input-box underline">
                <input type="username" placeholder="Enter Your Email" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Your Password" required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" name="" value="Continue">
            </div>
        </form>
    </div>
</body>

</html>
