<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white text-black rounded-lg shadow-lg p-8 max-w-5xl w-full flex flex-col md:flex-row gap-2 md:gap-20">
        <!-- Logo and Description (Above Form on Mobile) -->
        <div class="w-full md:w-1/2 p-4 flex flex-col items-center justify-center order-2 md:order-2">
            <img class="w-full rounded-full object-cover" src="{{ asset('/images/logo-radioin.png') }}" alt="Website Logo">
            <p class="text-center text-xl font-bold text-emerald-600">Selamat Mendengarkan dan Menikmati Streaming Radio dan Podcast!</p>
        </div>

        <!-- Form Login -->
        <div class="w-full md:w-1/2 p-4 order-1 md:order-1">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form action="<?= url('login_post')  ?>" method="POST">
                @csrf

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <span class="text-red-600 text-md">{{ $error }}</span>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="<?= old('email') ?>" class="w-full p-2 border border-black rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" placeholder="Masukkan Email Anda..." required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-black rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" placeholder="Masukkan Password Anda..." required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember_me" class="text-neutral-600 focus:ring-0 rounded-sm">
                        <label for="remember_me" class="ml-2 text-sm">Remember Me</label>
                    </div>
                    <a href="#" class="text-sm text-emerald-600 font-semibold hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded">Login</button>
            </form>
            <p class="text-center text-sm mt-6">
                Don't have an account? <a href="/regist" class="text-emerald-600 font-semibold hover:underline">Sign Up</a>
            </p>
        </div>
    </div>
</body>

</html>
