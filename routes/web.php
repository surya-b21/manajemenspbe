<?php

use App\Http\Controllers\Administrator\DeveloperController;
use App\Http\Controllers\Administrator\DokumenController;
use App\Http\Controllers\Administrator\ElemenSmartController;
use App\Http\Controllers\Administrator\KategoriUmumController;
use App\Http\Controllers\Administrator\OpdController;
use Illuminate\Support\Facades\Route;
use Hexters\Ladmin\Routes\Ladmin;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Ladmin::route(function() {
    Route::prefix('account')->as('account.')->middleware(['verified'])->group(function () {
        Route::resource('/opd', OpdController::class);
    });
    Route::prefix('kelola')->as('kelola.')->middleware(['verified'])->group(function() {
        Route::resource('/kategori-umum', KategoriUmumController::class);
        Route::resource('/elemen-smart', ElemenSmartController::class);
        Route::resource('/dokumen', DokumenController::class);
        Route::resource('/developer', DeveloperController::class);
    });
});

require __DIR__.'/auth.php';
