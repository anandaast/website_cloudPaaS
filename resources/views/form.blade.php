<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-pink-600 mb-4 text-center">Form Input</h2>
        <form action="/submit" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-pink-700">Nama:</label>
                <input type="text" name="nama" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>
            <div class="mb-4">
                <label class="block text-pink-700">Email:</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>
            <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
