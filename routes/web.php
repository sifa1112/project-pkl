<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
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
    // Route::group(['prefix' => 'karyawan', 'middleware' => ['auth', 'role:karyawan']],
    // function () {
    //     Route::get('/', function () {
    //         return 'halaman karyawan';
    //     });
        
    //     Route::get('profile', function () {
    //         return 'halaman profil karyawan';
    //     });
    // });
    Route::get('/home', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan');
    Route::get('/home', [App\Http\Controllers\JabatanController::class, 'index'])->name('jabatan');
    Route::get('/home', [App\Http\Controllers\GajiController::class, 'index'])->name('home');


    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
        Route::get('karyawan', function(){
            return ('karyawan.index');
        })->middleware(['role:admin']);

        Route::get('gaji', function(){
            return ('gaji.index');
        })->middleware(['role:admin|karyawan']);

        Route::resource('karyawan', KaryawanController::class);
        Route::resource('jabatan', JabatanController::class);
        Route::resource('gaji', GajiController::class);

        
    });

    

    // Route::get('/', function () {
    //     return view('bagian.awal');
    // });
    
    Auth::routes();
    
    
    // //route admin
    // Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin|member']],
    //     function ( ) {
    //         Route::get('/', function () {
    //             return view ('karyawan.index');
    //         })->middleware(['role:admin|member']);
    //     });
    
        
