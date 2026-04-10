<?php
session_start();
include '../koneksi/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {

    // ✅ SIMPAN YANG DIPERLUKAN SAJA
    $_SESSION['user'] = $data['nama'];
    $_SESSION['email'] = $data['email'];

    header("Location: ../dashboard.php");
    exit;

} else {
    echo "Login gagal!";
}
?>