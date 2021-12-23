<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('/', function () {
            return 'halaman admin';
        });
        
        Route::get('profile', function () {
            return 'halaman profil admin';
        });
    });

    //member
    Route::group(['prefix' => 'karyawan', 'middleware' => ['auth', 'role:karyawan']],
    function () {
        Route::get('/', function () {
            return 'halaman karyawan';
        });
        
        Route::get('profile', function () {
            return 'halaman profil karyawan';
        });
    });
