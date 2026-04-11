<?php
session_start();
include 'koneksi.php';

// proteksi login
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

// validasi id
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID tidak valid");
}

$id = $_GET['id'];

// prepared statement (AMAN)
$stmt = mysqli_prepare($koneksi, "DELETE FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: dashboard.php?hapus=success");
    exit;
} else {
    echo "Gagal menghapus data";
}