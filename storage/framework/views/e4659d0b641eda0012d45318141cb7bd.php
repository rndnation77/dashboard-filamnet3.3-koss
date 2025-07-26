<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelangi Kost Medan</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 15px;
            border-radius: 50%;
            font-size: 24px;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
<nav class="w-full bg-white shadow sticky top-0 z-50 px-4 py-4 flex items-center justify-between">
    <!-- Logo di pojok kiri -->
    <h1 class="text-xl font-bold text-indigo-600">Pelangi Kost Medan</h1>

    <!-- Tombol menu untuk HP -->
    <button id="navToggle" class="text-2xl md:hidden text-gray-800 focus:outline-none">
        ☰
    </button>

    <!-- Menu navigasi -->
    <ul id="navMenu"
        class="hidden md:flex md:space-x-6 absolute md:static bg-white top-16 left-0 w-full md:w-auto px-4 py-4 md:p-0 shadow md:shadow-none z-40">
        <li><a href="#beranda" class="block hover:text-indigo-600">Beranda</a></li>
        <li><a href="#tentang" class="block hover:text-indigo-600">Tentang Kami</a></li>
        <li><a href="#fasilitas" class="block hover:text-indigo-600">Fasilitas</a></li>
        <li><a href="#kamar" class="block hover:text-indigo-600">Tipe Kamar</a></li>
        <li><a href="#galeri" class="block hover:text-indigo-600">Galeri</a></li>
        <li><a href="#kontak" class="block hover:text-indigo-600">Kontak</a></li>
        <li><a href="#lokasi" class="block hover:text-indigo-600">Lokasi</a></li>
    </ul>
</nav>




    <!-- Hero -->
    <section id="beranda" class="bg-cover bg-center h-screen" style="background-image: url('https://via.placeholder.com/1600x900');">
        <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
            <div class="text-center text-white space-y-4">
                <h2 class="text-4xl font-semibold">Selamat Datang di Pelangi Kos</h2>
                <p class="text-lg">Kos nyaman, aman, dan strategis di Medan</p>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section id="fasilitas" class="py-16 bg-gray-50 text-center">
        <h3 class="text-2xl font-semibold mb-8 text-indigo-600">Fasilitas</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <?php
                $fasilitas = [
                    ['icon' => 'fa-wifi', 'label' => 'Wi-Fi Cepat'],
                    ['icon' => 'fa-snowflake', 'label' => 'AC'],
                    ['icon' => 'fa-tv', 'label' => 'TV'],
                    ['icon' => 'fa-car', 'label' => 'Parkiran'],
                    ['icon' => 'fa-toilet', 'label' => 'Kamar Mandi Dalam'],
                    ['icon' => 'fa-utensils', 'label' => 'Dapur Bersama'],
                ];
            ?>
            <?php $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center bg-white p-4 rounded shadow hover:shadow-md transition">
                    <i class="fas <?php echo e($item['icon']); ?> fa-2x text-indigo-500 mb-2"></i>
                    <p><?php echo e($item['label']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Tipe Kamar -->
    <section id="kamar" class="py-16 text-center">
        <h3 class="text-2xl font-semibold mb-8 text-indigo-600">Tipe Kamar & Harga</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="border p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-xl font-semibold">Kamar Standar</h4>
                <p class="text-gray-600">Rp 1.600.000 / bulan</p>
            </div>
            <div class="border p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-xl font-semibold">Kamar Kecil</h4>
                <p class="text-gray-600">Rp 1.400.000 / bulan</p>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="py-16 bg-gray-50 text-center">
        <h3 class="text-2xl font-semibold mb-8 text-indigo-600">Galeri</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <img class="rounded shadow" src="https://via.placeholder.com/400x250" alt="Kamar">
            <img class="rounded shadow" src="https://via.placeholder.com/400x250" alt="Dapur">
            <img class="rounded shadow" src="https://via.placeholder.com/400x250" alt="Tampak Depan">
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-16 text-center">
        <h3 class="text-2xl font-semibold mb-6 text-indigo-600">Kontak</h3>
        <p class="mb-2">📞 WhatsApp: <a href="https://wa.me/6281234567890" class="text-indigo-500 hover:underline">+62 812-3456-7890</a></p>
        <p>📧 Email: <a href="mailto:kosharapan@example.com" class="text-indigo-500 hover:underline">kosharapan@example.com</a></p>
    </section>

    <!-- Lokasi -->
    <section id="lokasi" class="py-16 bg-gray-50 text-center">
        <h3 class="text-2xl font-semibold mb-8 text-indigo-600">Lokasi</h3>
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div>
                <h4 class="font-semibold mb-2">Roemah Pelangi - Danau Singkara</h4>
                <p class="mb-2">Jl. Danau Singkara</p>
                <iframe class="w-full rounded" height="250" src="https://maps.google.com/maps?q=universitas%20gadjah%20mada&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Pelangi Residence</h4>
                <p class="mb-2">Jl. Danau Singkara</p>
                <iframe class="w-full rounded" height="250" src="https://maps.google.com/maps?q=universitas%20islam%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 mt-10 border-t text-sm text-gray-500">
        &copy; 2025 Pelangi Kost. All rights reserved.
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/6281234567890" class="whatsapp-float" title="Hubungi via WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <script>
  const navToggle = document.getElementById('navToggle');
  const navMenu = document.getElementById('navMenu');

  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
</script>
</body>
</html>
<?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/landing.blade.php ENDPATH**/ ?>