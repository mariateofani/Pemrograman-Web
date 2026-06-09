
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - Klinik Sehat</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen">

    <!-- HEADER -->
    <div class="bg-blue-600 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

            <div>
                <h1 class="text-2xl font-bold text-white">
                    🏥 Klinik Sehat
                </h1>

                <p class="text-blue-100 text-sm">
                    Dashboard Manajemen Data Pengguna
                </p>
            </div>

            <a href="/"
               class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600">
                LOGOUT
            </a>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- CARD INFO -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">

            <div class="bg-white rounded-xl shadow-md p-6">

                <h3 class="text-gray-500 text-sm">
                    Total User
                </h3>

                <p class="text-4xl font-bold text-blue-600 mt-2">
                    {{ count($users) }}
                </p>

            </div>

            <div class="bg-white rounded-xl shadow-md p-6">

                <h3 class="text-gray-500 text-sm">
                    Status Sistem
                </h3>

                <p class="text-2xl font-bold text-green-600 mt-2">
                    Aktif
                </p>

            </div>

            <div class="bg-white rounded-xl shadow-md p-6">

                <h3 class="text-gray-500 text-sm">
                    Database
                </h3>

                <p class="text-2xl font-bold text-purple-600 mt-2">
                    MySQL
                </p>

            </div>

        </div>

        <!-- TABEL -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="bg-blue-600 px-6 py-4">

                <h2 class="text-xl font-bold text-white">
                    Data User Terdaftar
                </h2>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="p-4 text-left">
                                ID
                            </th>

                            <th class="p-4 text-left">
                                Nama
                            </th>

                            <th class="p-4 text-left">
                                Email
                            </th>

                            <th class="p-4 text-left">
                                Tanggal Daftar
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                        <tr class="border-b hover:bg-blue-50 transition">

                            <td class="p-4">
                                {{ $user->id }}
                            </td>

                            <td class="p-4 font-medium">
                                {{ $user->name }}
                            </td>

                            <td class="p-4">
                                {{ $user->email }}
                            </td>

                            <td class="p-4">
                                {{ $user->created_at }}
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>
