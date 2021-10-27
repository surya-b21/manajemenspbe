<?php

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
Route::get('/home', function () {
    return view('template2/homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Ladmin::route(function () {
    Route::resource('/withdrawal', WithdrawalController::class); // Example
});

require __DIR__ . '/auth.php';

// FORUM

Route::get('/forum', 'App\Http\Controllers\Forum\KategoriController@allCategories');
Route::get('/forum/{id}', 'App\Http\Controllers\Forum\TopikController@index');

// Route::get('/topik', 'App\Http\Controllers\topikController@index');
Route::get('/topik/{id}', 'App\Http\Controllers\Forum\KomentarController@show');
Route::post('/topik/add/', 'App\Http\Controllers\Forum\TopikController@processAdd');
Route::get('/topik/delete/{idtopik}', 'App\Http\Controllers\Forum\TopikController@delete');
Route::get('/topik/update/{idtopik}', 'App\Http\Controllers\Forum\TopikController@update');
Route::post('/topik/update/{idtopik}', 'App\Http\Controllers\Forum\TopikController@processUpdate');

Route::post('/komentar/add/', 'App\Http\Controllers\Forum\KomentarController@processAdd');
Route::get('/komentar/delete/{idkomen}', 'App\Http\Controllers\Forum\KomentarController@delete');
Route::get('/komentar/update/{idkomen}', 'App\Http\Controllers\Forum\KomentarController@update');
Route::post('/komentar/update/{idkomen}', 'App\Http\Controllers\Forum\KomentarController@processUpdate');

Route::get('/inovasi', function () {
    return view('inovasi/inovasi');
});

Route::get('/tambah', [InovasiController::class, 'tambah_data']);

Route::get('/dashboard', [InovasiController::class, 'dashboard']);

Route::post('/kategori', [InovasiController::class, 'kategori']);
