<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white via-purple-100 to-white min-h-screen flex items-center justify-center">

    <div class="text-center space-y-4 p-6">
        <h1 class="text-3xl font-bold text-indigo-700">Terima Kasih 🙏</h1>
        <p class="text-gray-700 text-sm">
            Anda telah berhasil mengisi kehadiran rapat. <br>
            Semoga hasil rapat hari ini bermanfaat untuk kemajuan sekolah kita bersama.
        </p>
        <a href="{{ route('notulen') }}"
           class="inline-block mt-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded">
            Kembali ke Halaman Kehadiran
        </a>
    </div>

</body>
</html>
