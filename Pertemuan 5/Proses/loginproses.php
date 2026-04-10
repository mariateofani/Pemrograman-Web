<?php
session_start();
include '../koneksi/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['user'] = $data;
    header("Location: ../dashboard.php");
} else {
    echo "Login gagal!";
}
?>