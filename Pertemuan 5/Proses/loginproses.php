<?php
session_start();
include '../services/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users 
WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Login gagal";
}
?>