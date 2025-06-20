<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kehadiran Rapat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        canvas {
            border: 1px solid #ccc;
            border-radius: 0.375rem;
            background-color: white;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-white via-purple-100 to-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-xl mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-center mb-2">Kehadiran Rapat</h1>
        <p class="text-center text-sm text-gray-700 mb-1">
            Evaluasi program sekolah dan pembelajaran tahun pelajaran 2024/2025 Rapat Pleno
        </p>
        <p class="text-center text-sm text-gray-700 mb-1">
            Kenaikan Kelas X dan XI tahun pelajaran 2024/2025
        </p>
        <p class="text-center text-sm text-gray-600 mb-6">20-06-2025</p>

        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Guru / Karyawan</label>
                <select
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-400">
                    <option>Pilih Kode / Nama Anda</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Jabatan</label>
                <select
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-400">
                    <option>Pilih Jabatan</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Tanda Tangan</label>
                <canvas id="signature" width="400" height="150" class="w-full"></canvas>
                <button type="button" onclick="clearCanvas()"
                    class="bg-red-600 text-white text-sm px-4 py-2 rounded hover:bg-red-700 transition mt-3">
                    Reset
                </button>

            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2 rounded transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        const canvas = document.getElementById('signature');
        const ctx = canvas.getContext('2d');
        let drawing = false;

        canvas.addEventListener('mousedown', (e) => {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });

        canvas.addEventListener('mousemove', (e) => {
            if (drawing) {
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
            }
        });

        canvas.addEventListener('mouseup', () => {
            drawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            drawing = false;
        });

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }
    </script>
</body>

</html>