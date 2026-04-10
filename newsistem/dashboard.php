<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="p-6">

<h1 class="text-2xl font-bold mb-4">
Dashboard
</h1>

<p>Selamat datang, <?php echo $_SESSION['email']; ?></p>

<a href="logout.php" class="text-red-500 mt-3 inline-block">
Logout
</a>

</div>

</body>
</html>