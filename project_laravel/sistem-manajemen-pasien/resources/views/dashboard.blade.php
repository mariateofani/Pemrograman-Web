<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-gray-50">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow p-5">
        <h2 class="text-xl font-bold mb-5">Klinik Gen Z</h2>

        <ul class="space-y-3 text-sm">
            <li><a href="/dashboard" class="text-blue-600 font-semibold">Dashboard</a></li>
            <li><a href="/logout" class="text-red-500">Logout</a></li>
        </ul>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-6">

        <h1 class="text-2xl font-bold mb-1">
            Dashboard Pasien
        </h1>

        <p class="text-gray-500 mb-6">
            Selamat datang, {{ session('user_name') }}!
        </p>

        <!-- CARD STAT -->
        <div class="grid grid-cols-3 gap-4 mb-6">

            <div class="bg-white p-4 rounded-xl shadow text-center">
                <div class="text-2xl font-bold text-blue-600">1</div>
                <div class="text-sm text-gray-500">Antrian Aktif</div>
            </div>

            <div class="bg-white p-4 rounded-xl shadow text-center">
                <div class="text-2xl font-bold text-green-600">5</div>
                <div class="text-sm text-gray-500">Total Kunjungan</div>
            </div>

            <div class="bg-white p-4 rounded-xl shadow text-center">
                <div class="text-2xl font-bold text-purple-600">2</div>
                <div class="text-sm text-gray-500">Survei Diisi</div>
            </div>

        </div>

        <!-- ACTIVE QUEUE -->
        <div class="bg-white p-6 rounded-xl shadow mb-6">

            <h2 class="font-bold mb-2">Antrian Aktif Hari Ini</h2>

            <div class="text-4xl font-extrabold text-blue-600">
                #12
            </div>

            <p class="text-gray-500 mt-1">
                Poli Umum • dr. Ahmad
            </p>

            <p class="text-sm text-gray-400 mt-2">
                Estimasi: 10:30
            </p>

        </div>

        <!-- MENU -->
        <div class="grid grid-cols-3 gap-4">

            <a href="#" class="bg-white p-4 rounded-xl shadow hover:shadow-md">
                <i class="fa fa-hospital text-blue-500 text-xl"></i>
                <div class="font-semibold mt-2">Info Poli</div>
            </a>

            <a href="#" class="bg-white p-4 rounded-xl shadow hover:shadow-md">
                <i class="fa fa-ticket text-green-500 text-xl"></i>
                <div class="font-semibold mt-2">Ambil Antrian</div>
            </a>

            <a href="#" class="bg-white p-4 rounded-xl shadow hover:shadow-md">
                <i class="fa fa-chart-bar text-purple-500 text-xl"></i>
                <div class="font-semibold mt-2">Survei</div>
            </a>

        </div>

    </main>

</div>

</body>
</html>