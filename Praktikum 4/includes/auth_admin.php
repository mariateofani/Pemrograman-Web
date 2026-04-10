<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['user']['role'] != 'admin') {
    echo "Akses ditolak!";
    exit;
}
?>