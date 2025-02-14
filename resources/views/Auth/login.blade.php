<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika ada -->
        @if($errors->has('password'))
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                {{ $errors->first('password') }}
            </div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" id="email" required autofocus autocomplete="new-email" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password" required autocomplete="new-password" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Reset Password Link -->
            <div class="mb-4 text-right">
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Lupa Password?</a>
            </div>

            <!-- Login Button -->
            <div class="mb-6 text-center">
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Login
                </button>
            </div>
        </form>

        <!-- Google Login Button -->
        <div class="mt-4 space-y-2">
            <a href="{{ route('socialite.auth', 'google') }}" class="inline-flex items-center justify-center w-full bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <!-- Google Logo -->
                <img src="{{ asset('assets/img/google/google.svg.png') }}" alt="Google Logo" class="w-6 h-6 mr-3">
                <span class="text-sm font-semibold text-gray-700">Login with Google</span>
            </a>
        </div>

        <!-- Footer Text -->
        <div class="mt-4 text-center text-gray-500">
            <p class="text-xs">The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk</p>
        </div>

        <!-- Registration Link -->
        <div class="mt-4 text-center">
            <p class="text-sm">
                Belum memiliki akun? <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Registrasi</a>
            </p>
        </div>
    </div>
</body>

</html>
