<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm w-full">
        <h2 class="text-2xl font-semibold text-gray-800 text-center">Lupa Password?</h2>
        <p class="text-gray-600 text-sm text-center mt-2">Masukkan email Anda untuk mendapatkan tautan reset password.</p>
        
        <form method="POST" action="{{ route('password.email') }}" class="mt-4" onsubmit="showNotification(event)">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" required placeholder="Masukkan email Anda"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                Kirim Tautan Reset
            </button>
        </form>

        <!-- Atau Pisah -->
        <div class="flex items-center my-4">
            <hr class="flex-grow border-gray-300">
            <span class="px-2 text-gray-500 text-sm">Atau</span>
            <hr class="flex-grow border-gray-300">
        </div>

        <!-- Tombol Login dengan Google -->
        <div class="mt-4 space-y-2">
            <a href="{{ route('socialite.auth', 'google') }}" class="inline-flex items-center justify-center w-full bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <img src="{{ asset('assets/img/google/google.svg.png') }}" alt="Google Logo" class="w-6 h-6 mr-3">
                <span class="text-sm font-semibold text-gray-700">Masuk dengan Google</span>
            </a>
        </div>

        <p class="text-center text-sm text-gray-500 mt-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Kembali ke Login</a>
        </p>
    </div>

    <!-- Popup Notifikasi -->
    <div id="notification" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg hidden">
        ✅ Link reset kata sandi telah dikirim ke email Anda.
    </div>

    <!-- JavaScript untuk Notifikasi -->
    <script>
        function showNotification(event) {
            event.preventDefault(); // Mencegah form submit langsung agar bisa simulasi notifikasi
            const notification = document.getElementById('notification');
            notification.classList.remove('hidden');

            // Sembunyikan popup setelah 3 detik
            setTimeout(() => {
                notification.classList.add('hidden');
                event.target.submit(); // Kirim form setelah notifikasi tampil
            }, 3000);
        }
    </script>
</body>
</html>
