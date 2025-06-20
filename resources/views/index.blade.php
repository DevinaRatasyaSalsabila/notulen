<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Rapat Hari Ini</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-white via-purple-100 to-white min-h-screen text-gray-800">

    <nav class="flex justify-between items-center px-6 py-4 text-sm">
        <img src="https://th.bing.com/th/id/OIP.cx5eUKZzZPPQmZi5ZA-WUgHaHV?w=192&h=190&c=7&r=0&o=7&pid=1.7&rm=3"
            alt="logo" class="w-6 h-6">
        <div class="space-x-6 text-gray-700">
            <a href="#" class="hover:underline">Beranda</a>
            <a href="#" class="hover:underline">Buku Tamu</a>
            <a href="#" class="hover:underline">Notulen</a>
        </div>
        <a href="#" class="text-gray-600 hover:underline">Log in →</a>
    </nav>

    <div class="text-center mt-4 mb-10">
        <h1 class="text-3xl font-semibold">Daftar Rapat Hari Ini</h1>
        <p class="text-sm text-gray-600 mt-1">20-06-2025</p>
    </div>

    <div class="flex flex-wrap justify-center gap-6 px-6">

        <div class="bg-white bg-opacity-90 shadow-lg rounded-xl w-full sm:w-[340px] p-5 space-y-4">
            <p class="font-semibold leading-relaxed text-sm">
                Evaluasi Program Sekolah Dan Pembelajaran Tahun Pelajaran 2024/2025 Rapat Pleno Kenaikan Kelas X Dan XI
                Tahun Pelajaran 2024/2025
            </p>

            <hr />

            <div class="space-y-1 text-sm text-gray-700">
                <div class="flex items-center gap-2">
                    <span>📅</span> <span>Tanggal: 20-06-2025</span>
                </div>
                <div class="flex items-center gap-2">
                    <span>⏰</span> <span>Waktu: 12:00 - Selesai</span>
                </div>
                <div class="flex items-center gap-2">
                    <span>📍</span> <span>Tempat: Ruang Aula SMK PGRI Wlingi</span>
                </div>
            </div>

            <div class="flex items-center justify-start gap-3 pt-3">
                <span class="text-xs px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full whitespace-nowrap">
                    Status: aktif
                </span>
                <a href="{{ route('notulen') }}"
                    class="inline-flex bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-full whitespace-nowrap">
                    Hadiri Rapat
                </a>
            </div>



        </div>
    </div>

</body>

</html>