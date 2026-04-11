<?php
session_start();
include 'service/koneksi.php';

if (!isset($_SESSION['email']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

// data survey
$data = mysqli_query($koneksi, "SELECT * FROM survey");

// data user
$user = mysqli_query($koneksi, "SELECT * FROM users");
?>

<!doctype html>
<html>
<head>
<title>Dashboard Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow-md">
  <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
    <h1 class="font-bold text-blue-600 text-xl">Klinik Sehat</h1>

    <div class="flex items-center gap-4">
      <span class="text-gray-600">
        Halo, <b><?= $_SESSION['nama']; ?></b>
      </span>

      <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
        Logout
      </a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="bg-sky-100 py-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-10 px-6">

    <div>
      <h1 class="text-4xl font-bold text-blue-700 mb-6">
        Halo Admin: <?= $_SESSION['nama']; ?>
      </h1>

      <p class="text-gray-600 mb-6">
        Selamat datang di dashboard admin Klinik Sehat.
      </p>

      <div class="flex gap-3">

        <a href="#user" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
          Kelola User
        </a>
        
        <a href="#kelola" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
          Kelola Data
        </a>

        <a href="#grafik" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
          Lihat Grafik
        </a>
      </div>
    </div>

    <img src="https://i.pinimg.com/736x/20/95/a7/2095a72f390f72074776019b7004d776.jpg"
         class="rounded-xl shadow-lg">
  </div>
</section>

<!-- ===================== -->
<!-- KELOLA USER -->
<!-- ===================== -->
<section id="user" class="max-w-6xl mx-auto mt-10">

  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Kelola User</h2>

    <table class="w-full border">
      <tr class="bg-gray-200">
        <th class="p-2">Nama</th>
        <th class="p-2">Email</th>
        <th class="p-2">Role</th>
        <th class="p-2">Aksi</th>
      </tr>

      <?php while($u = mysqli_fetch_assoc($user)) { ?>
      <tr class="border-t">
        <td class="p-2"><?= $u['nama'] ?></td>
        <td class="p-2"><?= $u['email'] ?></td>
        <td class="p-2"><?= $u['role'] ?></td>
        <td class="p-2">
          <a href="editusers.php?id=<?= $u['id'] ?>" class="text-blue-500">
            Edit
          </a>

          <a href="hapususers.php?id=<?= $u['id'] ?>" 
             class="text-red-500 ml-2"
             onclick="return confirm('Yakin ingin hapus user ini?')">
             Hapus
          </a>
      </tr><?php } ?>
    </table>
  </div>
</section>

<!-- ===================== -->
<!-- KELOLA SURVEY -->
<!-- ===================== -->
<section id="kelola" class="max-w-6xl mx-auto mt-10">

  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Data Survey Pasien</h2>

    <table class="w-full border">
      <tr class="bg-gray-200">
        <th class="p-2">Nama</th>
        <th class="p-2">HP</th>
        <th class="p-2">JK</th>
        <th class="p-2">Total Skor</th>
        <th class="p-2">Aksi</th>
      </tr>

      <?php while($u = mysqli_fetch_assoc($user)) { ?>
<tr class="border-t">

  <td class="p-2"><?php echo $u['nama']; ?></td>
  <td class="p-2"><?php echo $u['email']; ?></td>
  <td class="p-2"><?php echo $u['role']; ?></td>

  <td class="p-2">

    <a href="editusers.php?id=<?php echo $u['id']; ?>" 
       class="text-blue-500">
       Edit
    </a>

    <a href="hapususers.php?id=<?php echo $u['id']; ?>" 
       class="text-red-500 ml-2"
       onclick="return confirm('Yakin ingin hapus user ini?')">
       Hapus
    </a>

  </td>

</tr>
<?php } ?>
    </table>
  </div>
</section>

<!-- ===================== -->
<!-- GRAFIK -->
<!-- ===================== -->
<section id="grafik" class="max-w-6xl mx-auto mt-10 mb-10">

  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Grafik Kepuasan</h2>

    <!-- nanti bisa ganti Chart.js -->
    <img src="https://www.chartjs.org/img/chartjs-logo.svg" class="w-40 mb-4">

    <p class="text-gray-600">
      Grafik akan menampilkan rata-rata kepuasan dari hasil survey.
    </p>
  </div>
</section>

</body>
</html>