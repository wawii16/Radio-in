<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BeritaController;
use App\Http\Middleware\HasRoleAdminMiddleware;
use App\Models\Berita;
use App\Models\Podcast;
use App\Models\Radio;
use app\Models\User;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('index');

// Route untuk halaman berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');


// Route untuk halaman radio
Route::get('/radio', function () {
    $radios = Radio::get();
    return view('layanan/radio', compact('radios'));
});

// Route untuk halaman podcast
Route::get('/podcast', function () {
    $podcasts = Podcast::get();
    return view('layanan/podcast', compact('podcasts'));
});

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
});

// Route untuk pop up pesan
Route::post('/', [MessageController::class, 'sendMessage'])->name('sendMessage');

// Route untuk pencarian
Route::get('/search', [SearchController::class, 'search']);

// Route grup untuk admin dengan middleware auth dan HasRoleAdminMiddleware
Route::prefix('admin')->middleware(['auth', HasRoleAdminMiddleware::class])->group(function () {

    // Route untuk halaman admin dengan tabel user dan message
    Route::get('/', [AdminController::class, 'indexUsersAndMessages'])->name('admin');

    // Route untuk manajemen Pesan
    Route::delete('/{id}', [AdminController::class, 'deleteMessage'])->name('deleteMessage');

    // Route untuk manajemen Pengguna
    Route::get('/edit/user-modals/{id}', [AdminController::class, 'userModals'])->name('admin.edit_user_modals');
    Route::put('/edit/user-modals/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::delete('/edit/user-modals/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');

    // Route untuk manajemen radio
    Route::prefix('radio')->group(function () {
        Route::get('/', [AdminController::class, 'radio'])->name('admin.radio');
        Route::post('/', [AdminController::class, 'store_radio'])->name('admin.store_radio');
        Route::get('/{id}/edit', [AdminController::class, 'formRadio'])->name('admin.edit_radio');
        Route::put('/{id}', [AdminController::class, 'updateRadio'])->name('radioUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteRadio'])->name('radioDestroy');
    });

    // Route untuk manajemen berita
    Route::prefix('berita')->group(function () {
        Route::get('/', [AdminController::class, 'berita'])->name('admin.berita');
        Route::post('/', [AdminController::class, 'store_berita'])->name('store_berita');
        Route::get('/{id}/edit', [AdminController::class, 'formBerita'])->name('admin.edit_berita');
        Route::put('/{id}', [AdminController::class, 'updateBerita'])->name('beritaUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteBerita'])->name('beritaDestroy');
    });

    // Route untuk manajemen podcast
    Route::prefix('podcast')->group(function () {
        Route::get('/', [AdminController::class, 'podcast'])->name('admin.podcast');
        Route::post('/', [AdminController::class, 'store_podcast'])->name('store_podcast');
        Route::get('/{id}/edit', [AdminController::class, 'formPodcast'])->name('admin.edit_podcast');
        Route::put('/{id}', [AdminController::class, 'updatePodcast'])->name('podcastUpdate');
        Route::delete('/{id}', [AdminController::class, 'deletePodcast'])->name('podcastDestroy');
    });
});

// Route untuk halaman registrasi
Route::get('/regist', [AuthController::class, 'registration'])->name('regist');
// Route untuk halaman login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// Route untuk proses registrasi
Route::post('registration_post', [AuthController::class, 'registration_post'])->name('registration_post');
// Route untuk proses login
Route::post('login_post', [AuthController::class, 'login_post'])->name('login_post');
// Route untuk proses logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
