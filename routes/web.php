<?php

use App\Http\Controllers\KategoriController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/coba', function () {
    return view('beranda');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', function() {
    return view('home');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', function() {
        return view('home');
    });
    Route::get('profile', function() {
        return 'halaman profile admin';
    });
    Route::resource('kategori', KategoriController::class);
});

