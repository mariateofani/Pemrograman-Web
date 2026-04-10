<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Klinik Kesehatan Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-blue-600 text-white shadow-md">
  <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

    <h1 class="font-bold text-lg">Klinik Sehat</h1>

    <ul class="flex gap-6">
      <li><a href="#home" class="hover:text-blue-200">Home</a></li>
      <li><a href="#layanan" class="hover:text-blue-200">Layanan</a></li>
      <li><a href="#fitur" class="hover:text-blue-200">Fitur</a></li>
      <li><a href="login.php" class="hover:text-blue-200">Login</a></li>
      <li>
        <a href="register.php" class="bg-white text-blue-600 px-4 py-1 rounded">
          Daftar
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- HERO -->
<section id="home" class="bg-sky-100 py-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-10 px-6">

    <div>
      <h1 class="text-4xl font-bold text-blue-700 mb-6">
        Layanan Kesehatan Digital yang Cepat & Mudah
      </h1>

      <p class="text-gray-600 mb-6">
        Akses layanan kesehatan tanpa ribet. Daftar online, isi survey, dan dapatkan pelayanan terbaik dari Klinik Sehat.
      </p>

      <div class="flex gap-4">
        <a href="register.php"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700">
          Daftar Sekarang
        </a>

        <a href="login.php"
           class="bg-gray-200 px-6 py-3 rounded-lg hover:bg-gray-300">
          Login
        </a>
      </div>
    </div>

    <div>
      <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg"
           class="w-72 md:w-96 mx-auto rounded-lg shadow-lg">
    </div>

  </div>
</section>

<!-- INFORMASI -->
<section class="max-w-6xl mx-auto py-16 px-6 text-center">
  <h2 class="text-2xl font-bold mb-4">Tentang Klinik</h2>

  <p class="text-gray-600 max-w-3xl mx-auto">
    Klinik Sehat menyediakan layanan pemeriksaan umum, konsultasi dokter, dan pelayanan kesehatan lainnya dengan sistem digital untuk mempermudah pasien.
  </p>
</section>

<!-- LAYANAN -->
<section id="layanan" class="max-w-6xl mx-auto pb-16 px-6">
  <h2 class="text-2xl font-bold text-center mb-10">Layanan Kami</h2>

  <div class="grid md:grid-cols-3 gap-8">

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
      <h3 class="font-bold text-lg mb-2">Pemeriksaan Umum</h3>
      <p class="text-gray-600">
        Pelayanan kesehatan dasar oleh tenaga medis profesional.
      </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
      <h3 class="font-bold text-lg mb-2">Konsultasi Dokter</h3>
      <p class="text-gray-600">
        Konsultasi langsung dengan dokter terpercaya.
      </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
      <h3 class="font-bold text-lg mb-2">Pelayanan Gigi</h3>
      <p class="text-gray-600">
        Perawatan gigi oleh dokter gigi profesional.
      </p>
    </div>

  </div>
</section>

<!-- FITUR -->
<section id="fitur" class="bg-blue-50 py-16">
  <div class="max-w-6xl mx-auto text-center px-6">

    <h2 class="text-2xl font-bold mb-10">Fitur Unggulan</h2>

    <div class="grid md:grid-cols-4 gap-6">

      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="font-bold mb-2">Pendaftaran Online</h3>
        <p class="text-gray-600 text-sm">
          Daftar tanpa harus datang ke klinik.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="font-bold mb-2">Survey Kepuasan</h3>
        <p class="text-gray-600 text-sm">
          Berikan penilaian layanan klinik.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="font-bold mb-2">Data Digital</h3>
        <p class="text-gray-600 text-sm">
          Semua data tersimpan dengan aman.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="font-bold mb-2">Pelayanan Cepat</h3>
        <p class="text-gray-600 text-sm">
          Sistem efisien dan responsif.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-blue-600 text-white py-16 text-center">
  <h2 class="text-2xl font-bold mb-4">
    Mulai Sekarang
  </h2>

  <p class="mb-6">
    Daftar dan nikmati layanan kesehatan digital yang mudah.
  </p>

  <a href="register.php"
     class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold">
    Daftar Gratis
  </a>
</section>

<!-- FOOTER -->
<footer class="bg-gray-800 text-white text-center p-5">
  <p>© 2026 Klinik Sehat Digital</p>
</footer>

</body>
</html>