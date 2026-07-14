<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarpras Sekolah</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-slate-100">

<!-- Navbar -->
<nav class="bg-blue-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-8">

        <div class="flex justify-between items-center h-16">

            <div class="flex items-center gap-3">

                <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center text-2xl">
                    🏫
                </div>

                <div>
                    <h1 class="text-white font-bold text-xl">
                        Sarpras Sekolah
                    </h1>

                    <p class="text-blue-200 text-xs">
                        Sistem Informasi Inventaris
                    </p>
                </div>

            </div>

            <div class="space-x-3">

                <a href="/login"
                   class="px-5 py-2 bg-white rounded-lg text-blue-700 font-semibold hover:bg-blue-100 duration-300">
                    Login
                </a>

                <a href="/register"
                   class="px-5 py-2 border border-white rounded-lg text-white hover:bg-white hover:text-blue-700 duration-300">
                    Register
                </a>

            </div>

        </div>

    </div>
</nav>

<!-- Hero -->
<section class="max-w-7xl mx-auto px-8 py-20">

<div class="grid md:grid-cols-2 gap-16 items-center">

<div>

<h2 class="text-5xl font-bold text-slate-800 leading-tight">
Kelola
<span class="text-blue-700">
Sarana &
Prasarana
</span>
Sekolah
Lebih Mudah
</h2>

<p class="mt-6 text-slate-600 text-lg leading-relaxed">
Website ini membantu sekolah dalam mengelola inventaris barang,
mencatat peminjaman, pengembalian, serta membuat laporan
secara cepat dan efisien.
</p>

<div class="mt-10 flex gap-4">

<a href="/login"
class="bg-blue-700 text-white px-7 py-3 rounded-xl hover:bg-blue-800 transition">

Mulai Sekarang

</a>

<a href="#fitur"
class="border border-blue-700 text-blue-700 px-7 py-3 rounded-xl hover:bg-blue-700 hover:text-white transition">

Pelajari

</a>

</div>

</div>

<div class="flex justify-center">

<div class="bg-white rounded-3xl shadow-2xl p-12">

<div class="text-8xl text-center">
🏫
</div>

<h3 class="mt-6 text-center text-2xl font-bold text-slate-700">

Inventaris Sekolah

</h3>

<p class="text-center text-slate-500 mt-2">

Modern • Cepat • Aman

</p>

</div>

</div>

</div>

</section>

<!-- Statistik -->

<section class="max-w-7xl mx-auto px-8">

<div class="grid md:grid-cols-4 gap-6">

<div class="bg-white rounded-2xl shadow p-8 text-center">

<div class="text-5xl">📦</div>

<h3 class="mt-4 text-3xl font-bold">250+</h3>

<p class="text-slate-500">
Data Barang
</p>

</div>

<div class="bg-white rounded-2xl shadow p-8 text-center">

<div class="text-5xl">🏫</div>

<h3 class="mt-4 text-3xl font-bold">24</h3>

<p class="text-slate-500">
Ruangan
</p>

</div>

<div class="bg-white rounded-2xl shadow p-8 text-center">

<div class="text-5xl">💻</div>

<h3 class="mt-4 text-3xl font-bold">120</h3>

<p class="text-slate-500">
Perangkat
</p>

</div>

<div class="bg-white rounded-2xl shadow p-8 text-center">

<div class="text-5xl">🔧</div>

<h3 class="mt-4 text-3xl font-bold">15</h3>

<p class="text-slate-500">
Maintenance
</p>

</div>

</div>

</section>

<!-- Fitur -->

<section id="fitur" class="py-20">

<div class="max-w-7xl mx-auto px-8">

<h2 class="text-4xl font-bold text-center mb-14">

Fitur Utama

</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white rounded-2xl shadow-lg p-8">

<div class="text-5xl">📋</div>

<h3 class="mt-5 font-bold text-2xl">
Pendataan Barang
</h3>

<p class="mt-3 text-slate-600">
Mengelola seluruh inventaris sekolah dengan mudah.
</p>

</div>

<div class="bg-white rounded-2xl shadow-lg p-8">

<div class="text-5xl">📤</div>

<h3 class="mt-5 font-bold text-2xl">
Peminjaman
</h3>

<p class="mt-3 text-slate-600">
Mencatat peminjaman barang secara otomatis.
</p>

</div>

<div class="bg-white rounded-2xl shadow-lg p-8">

<div class="text-5xl">📈</div>

<h3 class="mt-5 font-bold text-2xl">
Laporan
</h3>

<p class="mt-3 text-slate-600">
Membuat laporan inventaris kapan saja.
</p>

</div>

</div>

</div>

</section>

<footer class="bg-blue-700 text-center text-white py-6 mt-10">

© 2026 Sarpras Sekolah • Laravel 12 + Tailwind CSS

</footer>

</body>
</html>