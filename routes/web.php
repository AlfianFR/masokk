<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\AllresepController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\loginController;


Route::get('/', function () {
    return view('user');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth',

// 'role:admin']], function () {
//         Route::get('/', function () {
//             return view('layouts.admin');
//         })->name('admin');
//         Route::resource('kota', KotaController::class);
//         Route::resource('resep', ResepController::class);
//         Route::resource('allresep', AllresepController::class);
//     });
// Route::get('/admin', function () {
//     return view('layouts.admin');
// });
// Route::get('/share', function () {
//     return view('share');
// });
// Route::post('register', [RegisterController::class,'create'])->name('register-create');
// Route::post('login-user', 'Auth\LoginController@login')->name('loginpost');

// Route::resource('/kota', KotaController::class);

// Route::get('/logout', [loginController::class, 'logout']);

// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function(){
//         if(Auth::check()){
//             if(Auth::user()){}
//         }
//     });
// }

// route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'role:isAdmin']], function() {
//     route::get('/', function() {
//         return "oy ipul";
//     });

// });

// route::group(['prefix' => 'penulis', 'middleware' => ['auth' => 'role:isPenulis']], function() {
//     route::get('/', function() {
//         return "oy ipul";
//     });

// });
