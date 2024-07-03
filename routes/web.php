<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\HasRoleAdminMiddleware;
use App\Models\Berita;
use App\Models\Podcast;
use App\Models\Radio;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/berita', function () {
    $beritas = Berita::get();
    return view('layanan/berita', compact('beritas'));
});

Route::get('/radio', function () {
    $radios = Radio::get();
    return view('layanan/radio', compact('radios'));
});

Route::get('/podcast', function () {
    $podcasts = Podcast::get();
    return view('layanan/podcast', compact('podcasts'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/search', [SearchController::class, 'search']);

Route::prefix('admin')->group(function () {
    Route::prefix('radio')->group(function () {

        Route::get('/', [AdminController::class, 'radio'])->name('admin.radio');
        Route::post('/', [AdminController::class, 'store_radio'])->name('admin.store_radio');
        Route::get('/{id}/edit', [AdminController::class, 'formRadio'])->name('admin.edit_radio');
        Route::put('/{id}', [AdminController::class, 'updateRadio'])->name('radioUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteRadio'])->name('radioDestroy');
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', [AdminController::class, 'berita'])->name('admin.berita');
        Route::post('/', [AdminController::class, 'store_berita'])->name('store_berita');
        Route::get('/{id}/edit', [AdminController::class, 'formBerita'])->name('admin.edit_berita');
        Route::put('/{id}', [AdminController::class, 'updateBerita'])->name('beritaUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteBerita'])->name('beritaDestroy');
    });
    Route::prefix('podcast')->group(function () {
        Route::get('/', [AdminController::class, 'podcast'])->name('admin.podcast');
        Route::post('/', [AdminController::class, 'store_podcast'])->name('store_podcast');
        Route::get('/{id}/edit', [AdminController::class, 'formPodcast'])->name('admin.edit_podcast');
        Route::put('/{id}', [AdminController::class, 'updatePodcast'])->name('podcastUpdate');
        Route::delete('/{id}', [AdminController::class, 'deletePodcast'])->name('podcastDestroy');
    });
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', HasRoleAdminMiddleware::class]);

Route::get('/regist', [AuthController::class, 'registration']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('registration_post', [AuthController::class, 'registration_post']);
Route::post('login_post', [AuthController::class, 'login_post']);

Route::get('logout', [AuthController::class, 'logout']);
