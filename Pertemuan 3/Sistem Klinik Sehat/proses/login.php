<?php
include '../server/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
?>