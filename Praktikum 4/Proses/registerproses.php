<?php
session_start();
include '../koneksi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'user'; // default user

    // hash password (WAJIB biar aman)
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // cek username sudah ada atau belum
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {
        header("Location: ../register.php?error=Username sudah digunakan");
        exit;
    }

    // insert ke database
    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password_hash', '$role')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // redirect ke login
        header("Location: ../login.php?success=1");
        exit;
    } else {
        header("Location: ../register.php?error=Gagal daftar");
        exit;
    }
}