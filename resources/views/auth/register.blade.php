<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white text-black rounded-lg shadow-lg p-8 max-w-md w-full">
        <h2 class="text-2xl font-semibold mb-6 text-center">Register</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="py-2 text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="<?= url('registration_post')  ?>" method="POST">
            <?= csrf_field()  ?>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" value="<?= old('name') ?>" class="w-full p-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" placeholder="Masukkan Nama Anda..." required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" value="<?= old('email') ?>" class="w-full p-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" placeholder="Masukkan Email Anda..." required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-black rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" placeholder="Masukkan Password Anda..." required>
            </div>
            <!-- <div class="mb-6">
                <label for="confirm_password" class="block text-sm font-medium mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="w-full p-2 border border-neutral-700 rounded-lg bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent" required>
            </div> -->
            <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded">Register</button>
        </form>
        <p class="text-center text-sm mt-6">
            Already have an account? <a href="/login" class="text-emerald-600 font-semibold hover:underline">Login</a>
        </p>
    </div>
</body>

</html>