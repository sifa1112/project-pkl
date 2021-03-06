<?php

use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now cr eate something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('admin', function () {
        return ('admin.index');
    })->middleware(['role:admin|karyawan']);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('gaji', GajiController::class);
    Route::get('laporan', [GajiController::class, 'laporan']);
});

// Route::group(['prefix' => 'karyawan', 'middleware' => ['auth', 'role:karyawan|admin']],
//     function () {
//         Route::get('karyawan', function () {
//             return view('karyawan.index');
//         })->middleware(['role:karyawan']);
//         Route::resource('karyawan', KaryawanController::class);
//         Route::resource('gaji', GajiController::class);

//         // Route::get('laporan', [GajiController::class, 'laporan'])->name('laporan');
//     });

//  //route admin
//  Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//              Route::get('admin', function () {
//                  return ('admin.index');
//          });

// Route::get('profile', function () {
//                                   return 'halaman profil admin';
//                          });
//                      });

//member
// Route::group(['prefix' => 'karyawan', 'middleware' => ['auth', 'role:karyawan']],
// function () {
//     Route::get('/', function () {
//         return 'halaman karyawan';
//     });

//     Route::get('profile', function () {
//         return 'halaman profil karyawan';
//     });
// });
// Route::get('/home', [App\Http\Controllers\KaryawanController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\JabatanController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\GajiController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\AbsenController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('bagian.awal');
// }); 23ofdoHkZxV7VqsclzdmDPwOMwi_2XLqwRRBCtwSerGAKy3t9

// Auth::routes();

//route karyawan
// Route::group(['prefix' => 'karyawan', 'middleware' => ['auth', 'role:karyawan']], function () {
//     Route::get('karyawan', function () {
//         return view('karyawan.index');
//     })->middleware(['role:karyawan']);
// });
