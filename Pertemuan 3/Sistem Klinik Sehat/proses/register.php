<?php
include '../server/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']); // wajib sama dengan login

$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

echo "Registrasi berhasil";
?>