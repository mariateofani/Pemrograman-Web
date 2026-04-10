<?php
session_start();

// CEK LOGIN
if (!isset($_SESSION['user'])) {
  header("Location: ../login.php");
  exit;
}

// CEK ROLE (HARUS ADMIN)
if ($_SESSION['role'] != 'admin') {
  header("Location: ../dashboard.php"); // lempar ke user dashboard
  exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-red-600 text-white shadow-md">
  <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
    
    <h1 class="font-bold text-lg">Admin Panel</h1>

    <ul class="flex gap-6">
      <li><a href="#" class="hover:text-red-200">Dashboard</a></li>
      <li><a href="../services/survey.php" class="hover:text-red-200">Data Survey</a></li>
      <li><a href="../proces/logout.php" class="hover:text-red-200">Logout</a></li>
    </ul>
  </div>
</nav>

<!-- HERO -->
<section class="py-16 text-center">
  <h1 class="text-3xl font-bold text-gray-800 mb-4">
    Selamat Datang, <?php echo $_SESSION['user']; ?> 👑
  </h1>

  <p class="text-gray-600">
    Anda login sebagai <b>Admin</b>
  </p>
</section>

<!-- MENU ADMIN -->
<section class="max-w-6xl mx-auto px-6 pb-16">
  
  <div class="grid md:grid-cols-3 gap-6">

    <!-- DATA USER -->
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="font-bold text-lg mb-2">Kelola User</h3>
      <p class="text-gray-600 mb-4">
        Lihat dan kelola data pengguna sistem.
      </p>
      <a href="../users.php" class="bg-blue-600 text-white px-4 py-2 rounded">
        Lihat Data
      </a>
    </div>

    <!-- DATA SURVEY -->
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="font-bold text-lg mb-2">Data Survey</h3>
      <p class="text-gray-600 mb-4">
        Lihat hasil survey kepuasan pasien.
      </p>
      <a href="../services/survey.php" class="bg-green-500 text-white px-4 py-2 rounded">
        Lihat Survey
      </a>
    </div>

    <!-- LAPORAN -->
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="font-bold text-lg mb-2">Laporan</h3>
      <p class="text-gray-600 mb-4">
        Download laporan data klinik.
      </p>
      <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded">
        Download
      </a>
    </div>

  </div>

</section>

<!-- FOOTER -->
<footer class="bg-red-600 text-white text-center p-5">
  <p>© 2026 Admin Klinik</p>
</footer>

</body>
</html>