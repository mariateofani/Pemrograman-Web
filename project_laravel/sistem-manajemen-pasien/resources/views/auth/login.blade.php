<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk</title>

    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <div
        class="min-h-[calc(100vh-4rem)] flex items-center justify-center py-12 px-4 bg-gradient-to-br from-blue-50 to-cyan-50">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-md p-8">

            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg shadow-blue-200">
                    <i class="fa-solid fa-hospital-user"></i>
                </div>

                <h1 class="text-2xl font-extrabold text-gray-900">
                    Masuk ke {{ config('app.name') }}
                </h1>

                <p class="text-gray-400 text-sm mt-1">
                    Selamat datang kembali!
                </p>
            </div>

            <!-- Error -->
            @if ($errors->any())

                <div
                    class="flex items-center gap-2 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm mb-5">

                    <i class="fa-solid fa-circle-exclamation"></i>

                    {{ $errors->first() }}

                </div>

            @endif


            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" novalidate>

                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        Email

                    </label>

                    <div class="relative">

                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <i class="fa-solid fa-envelope text-sm"></i>

                        </span>

                        <input type="email" name="email" placeholder="nama@email.com" required autofocus
                            class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">

                    </div>
                </div>


                <div class="mb-5">

                    <div class="flex justify-between mb-1.5">

                        <label class="text-sm font-semibold text-gray-700">

                            Password

                        </label>

                        <a href="{{ route('password.request') }}"
                            class="text-xs text-primary font-medium hover:underline">

                            Lupa password?

                        </a>

                    </div>


                    <div class="relative">

                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <i class="fa-solid fa-lock text-sm"></i>

                        </span>

                        <input type="password" id="pwd" name="password" placeholder="Password Anda" required
                            class="w-full pl-9 pr-10 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">

                        <button type="button" onclick="togglePwd('pwd','eye-pwd')"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">

                            <i id="eye-pwd" class="fa-solid fa-eye text-sm">

                            </i>

                        </button>

                    </div>

                </div>


                <button type="submit"
                    class="w-full bg-primary hover:bg-primary-light text-white py-3 rounded-xl font-bold text-sm transition shadow-lg shadow-blue-200 flex items-center justify-center gap-2">

                    <i class="fa-solid fa-right-to-bracket"></i>

                    Masuk

                </button>

            </form>


            <p class="text-center text-sm text-gray-400 mt-6">

                Belum punya akun?

                <a href="{{ route('register') }}" class="text-primary font-semibold hover:underline">

                    Daftar sekarang

                </a>

            </p>


            <!-- Demo -->
            <div class="mt-5 bg-blue-50 rounded-xl p-3 text-xs text-gray-500">

                <strong class="text-primary">

                    Demo:

                </strong>

                Admin:
                <code>admin@klinikgenz.com</code>
                /
                <code>Admin@123</code>

            </div>

        </div>
    </div>


    <script>

        function togglePwd(inputId, iconId) {

            const inp = document.getElementById(inputId);

            const icon = document.getElementById(iconId);

            const show = inp.type === 'password';

            inp.type =
                show
                    ? 'text'
                    : 'password';

            icon.className =
                show
                    ? 'fa-solid fa-eye-slash text-sm'
                    : 'fa-solid fa-eye text-sm';

        }

    </script>



    <script>

        function togglePwd() {

            const inp = document.getElementById('pwd');

            const icon = document.getElementById('eye-pwd');

            const show = inp.type === 'password';

            inp.type = show ? 'text' : 'password';

            icon.className =
                show
                    ? 'fa-solid fa-eye-slash text-sm'
                    : 'fa-solid fa-eye text-sm';

        }

    </script>

</body>

</html>