<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm w-full">
        <h2 class="text-2xl font-semibold text-gray-800 text-center">Ubah Password</h2>
        <p class="text-gray-600 text-sm text-center mt-2">Silakan masukkan password baru Anda.</p>
        
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" id="email" name="email">

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-1">Password Baru</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password baru"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-medium mb-1">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Konfirmasi password baru"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                Simpan Password
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Kembali ke Login</a>
        </p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("email").value = sessionStorage.getItem("reset_email") || "";
        });
    </script>
</body>
</html>
