
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesanTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

// Halaman publik
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/bukutamu', [PesanTamuController::class, 'index'])
    ->name('bukutamu.index');
Route::post('/bukutamu', [PesanTamuController::class, 'store'])
    ->name('bukutamu.store');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Halaman yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    // Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // CRUD kegiatan
    Route::resource('kegiatan', KegiatanController::class);

    // Kelola buku tamu
    Route::get('/admin/bukutamu', [PesanTamuController::class, 'adminIndex'])
        ->name('bukutamu.admin.index');
    Route::delete('/admin/bukutamu/{pesanTamu}', [PesanTamuController::class, 'destroy'])
        ->name('bukutamu.admin.destroy');

    // Pengaturan website
    Route::get('/settings', [SettingController::class, 'index'])
        ->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])
        ->name('settings.update');
});

require __DIR__.'/auth.php';
