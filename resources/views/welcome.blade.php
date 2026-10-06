<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UNUGHA</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- 1. Navigation Bar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo / Teks -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-emerald-600 hover:text-emerald-700">
                        Sistem Informasi UNUGHA
                    </a>
                </div>

                <!-- Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-emerald-600 font-medium transition duration-150">Home</a>
                    <a href="#" class="text-gray-700 hover:text-emerald-600 font-medium transition duration-150">Katalog</a>
                    <a href="#" class="text-gray-700 hover:text-emerald-600 font-medium transition duration-150">Kontak</a>
                </div>

                <!-- Tombol Login -->
                <div>
                    <a href="#" class="bg-emerald-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-emerald-700 transition duration-150 shadow-sm">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Selamat Datang di Portal Sistem Informasi
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-gray-500 sm:text-lg">
                Layanan terpadu untuk mendukung kegiatan akademik dan operasional kampus UNUGHA Cilacap.
            </p>
        </div>

        <!-- 2. Grid Fitur Utama (CSS Grid) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Katalog Lengkap</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Akses berbagai data dan informasi layanan sistem secara terstruktur dan cepat dalam satu tempat.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Akses Cepat</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Performa platform yang responsif memudahkan navigasi pengguna dari perangkat seluler maupun desktop.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Keamanan Terjamin</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sistem autentikasi yang aman untuk memastikan perlindungan data akun mahasiswa dan staf.
                </p>
            </div>
        </div>
    </main>

</body>
</html>