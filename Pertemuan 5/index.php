<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Sehat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center" style="background-image: url('assets/bgindex1.png');">

<div class="bg-black/50 min-h-screen">

  <nav class="bg-blue-600 text-white p-4 flex justify-center items-center">
  <h1 class="font-bold text-2xl">Klinik Sehat</h1>
</nav>

<!-- HERO -->
<section class="p-6 text-center">
  <h1 class="text-2xl font-bold text-white mb-3">
    Layanan Kesehatan Digital
  </h1>

  <p class="text-white text-sm mb-5">
    Daftar online, isi survey, dan nikmati pelayanan klinik dengan mudah.
  </p>

  <a href="register.php"
     class="block bg-blue-600 text-white py-3 rounded-lg mb-3">
    Daftar Sekarang
  </a>

  <a href="login.php"
     class="block bg-gray-200 py-3 rounded-lg">
    Login
  </a>
</section>

<!-- FITUR -->
<section class="px-6 pb-10">
  <h2 class="text-lg font-semibold mb-4">Fitur</h2>

  <div class="space-y-3">

    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold">Pendaftaran Online</h3>
      <p class="text-sm text-gray-600">
        Tidak perlu datang langsung ke klinik.
      </p>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold">Survey Kepuasan</h3>
      <p class="text-sm text-gray-600">
        Berikan penilaian layanan dengan mudah.
      </p>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold">Data Digital</h3>
      <p class="text-sm text-gray-600">
        Data tersimpan aman dan rapi.
      </p>
    </div>

  </div>
</section>
  
</div>
</body>
</html>

<?php include 'includes/footer.php'; ?>