<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="bg-white">

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

    <!-- HERO -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-cyan-50 to-blue-100 py-16 lg:py-24">

        <div class="absolute -top-16 -right-16 w-72 h-72 bg-blue-200 rounded-full opacity-30 blur-3xl"></div>

        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-cyan-200 rounded-full opacity-30 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- TEXT -->

                <div>

                    <div
                        class="inline-flex items-center gap-2 bg-blue-100 text-blue-600 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">

                        <i class="fa-solid fa-shield-halved"></i>

                        Sistem Klinik Digital #1

                    </div>


                    <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-4">

                        <span class="text-blue-600">

                            Selamat Datang

                        </span>

                        <br>

                        di {{ config('app.name') }}

                    </h1>


                    <p class="text-gray-500 text-lg mb-8">

                        Daftarkan diri Anda secara online,

                        pilih poliklinik,

                        dan dapatkan nomor antrian kapan saja.

                    </p>


                    <div class="flex gap-4 flex-wrap">

                        @auth

                            <a href="/dashboard" class="bg-blue-600 text-white px-6 py-3 rounded-xl">

                                Dashboard

                            </a>

                        @else

                            <a href="/register" class="bg-blue-600 text-white px-6 py-3 rounded-xl">

                                Daftar Sekarang

                            </a>


                            <a href="/login" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-xl">

                                Masuk

                            </a>

                        @endauth

                    </div>



                    <div class="flex gap-10 mt-10">

                        <div>

                            <div class="text-2xl font-bold text-blue-600">

                                1000+

                            </div>

                            <div class="text-gray-400 text-sm">

                                Pasien

                            </div>

                        </div>


                        <div>

                            <div class="text-2xl font-bold text-blue-600">

                                20+

                            </div>

                            <div class="text-gray-400 text-sm">

                                Dokter

                            </div>

                        </div>


                        <div>

                            <div class="text-2xl font-bold text-blue-600">

                                10

                            </div>

                            <div class="text-gray-400 text-sm">

                                Poliklinik

                            </div>

                        </div>

                    </div>

                </div>


                <!-- SVG -->
                <div>

                    <svg viewBox="0 0 480 380">

                        <ellipse cx="260" cy="200" rx="180" ry="155" fill="#BBDEFB" />

                        <rect x="200" y="175" width="68" height="115" rx="18" fill="white" />

                        <circle cx="234" cy="157" r="30" fill="#FFCC80" />

                    </svg>

                </div>

            </div>

        </div>

    </section>



    <!-- FEATURE -->

    <section class="py-12">

        <div class="max-w-7xl mx-auto px-4">

            <div class="grid md:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow p-5 text-center">

                    <i class="fa-solid fa-clock text-blue-500 text-2xl"></i>

                    <p class="font-bold mt-3">

                        Antrian Online

                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-5 text-center">

                    <i class="fa-solid fa-bell text-blue-500 text-2xl"></i>

                    <p class="font-bold mt-3">

                        Notifikasi

                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-5 text-center">

                    <i class="fa-solid fa-chart-bar text-blue-500 text-2xl"></i>

                    <p class="font-bold mt-3">

                        Survey

                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-5 text-center">

                    <i class="fa-solid fa-shield text-blue-500 text-2xl"></i>

                    <p class="font-bold mt-3">

                        Data Aman

                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- HOW IT WORKS -->

    <section class="bg-blue-50 py-16">

        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-center text-3xl font-bold mb-10">

                Cara Menggunakan

            </h2>


            <div class="grid md:grid-cols-4 gap-6">

                @foreach([
                                        'Daftar',
                                        'Pilih Poli',
                                        'Ambil Antrian',
                                        'Datang'
                                    ] as $step)

                    <div class="bg-white p-6 rounded-xl text-center shadow">

                    <div class="text-3xl font-bold text-blue-600">

                    {{ $loop->iteration }}

                    </div>

                    <div class="mt-3">

                    {{ $step }}

                    </div>

                    </div>

                @endforeach
    
</div>

</div>

</section>

</body>

</html>