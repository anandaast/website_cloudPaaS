<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-10 rounded-lg shadow-md w-[24rem] text-center space-y-4">
        <h2 class="text-2xl font-bold text-pink-600">Terima Kasih, {{ $nama }}!</h2>
        <p class="text-pink-700">Email kamu: <strong>{{ $email }}</strong></p>
        <a href="/form" class="block bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
            Kembali ke Form
        </a>
    </div>
</body>

