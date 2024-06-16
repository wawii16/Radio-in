<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="bg-neutral-900 text-white rounded-lg shadow-lg p-8 max-w-5xl w-full flex gap-20">
        <!-- Form Login -->
        <div class="w-1/2 p-4">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form action="<?= url('login_post')  ?>" method="POST">
                @csrf

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <span class="text-red-500 text-sm">{{ $error }}</span>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="<?= old('email') ?>" class="w-full p-2 border border-neutral-700 rounded-lg bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" required>

                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-neutral-700 rounded-lg bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember_me" class="text-neutral-600 focus:ring-0 rounded-sm">
                        <label for="remember_me" class="ml-2 text-sm">Remember Me</label>
                    </div>
                    <a href="#" class="text-sm text-yellow-300 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Login</button>
            </form>
            <p class="text-center text-sm mt-6">
                Don't have an account? <a href="/regist" class="text-yellow-300 hover:underline">Sign Up</a>
            </p>
        </div>
        <!-- Logo and Description -->
        <div class="w-1/2 p-4 flex flex-col items-center justify-center">
            <img class="w-full mb-4 rounded-3xl object-cover" src="{{ asset('/images/logo.png') }}" alt="Website Logo">
            <p class="text-center text-xl font-bold text-yellow-300">Selamat Mendengarkan dan Menikmati Streaming Radio dan Podcast!</p>
        </div>
    </div>
</body>

</html>