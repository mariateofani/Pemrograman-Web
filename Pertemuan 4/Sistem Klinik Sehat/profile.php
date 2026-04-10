
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-white min-h-screen">
        <nav class="bg-blue-600 text-white shadow-md">
            <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
                <div class="flex items-center gap-2">
                    <img src="https://down-id.img.susercontent.com/file/8bac08e36a5b3c2a943b8d356bf1bbbd@resize_w450_nl.webp"class="w-[60px] ml-[30px] mr-[15px] bg-white p-1 rounded">
                    <h1 class="font-bold text-lg">Klinik Sehat</h1>
                </div>
                
                <ul class="flex gap-6">
                    <li><a href="index.php" class="hover:text-blue-200">Home</a></li>
                    <li><a href="#layanan" class="hover:text-blue-200">Layanan</a></li>
                    <li><a href="#fitur" class="hover:text-blue-200">Fitur</a></li>
                    <li><a href="profile.php" class="hover:text-blue-200">Profile</a></li>
                    <li><a href="login.php" class="hover:text-blue-200">Login</a></li>
                </ul>
            
            </div>
        </nav>
        
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <div class="bg-white p-8 rounded shadow w-96 text-center">
                <img src="https://i.pravatar.cc/150" class="rounded-full mx-auto mb-4">
                <h2 class="text-2xl font-bold text-blue-600 mb-6">Profil Pasien</h2>
                <div class="grid grid-cols-2 gap-4 text-left">
                    <p class="text-gray-500"><b>Nama:</b> Evrytaa</p>
                    <p class="text-gray-500"><b>Email:</b> evrytaa@email.com</p>
                    <p class="text-gray-500"><b>No HP:</b> 08123456789</p>
                    <p class="text-gray-500"><b>Alamat:</b> Madiun</p>
                </div>
                
                <button class="mt-6 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
            </div>
        </div>
        
        <footer class="bg-blue-600 text-white text-center p-4 mt-10">
            <p>© 2026 Klinik Sehat Digital</p>
            <p>Melayani kesehatan masyarakat dengan teknologi</p>
        </footer>
    
    </body>
</html>
