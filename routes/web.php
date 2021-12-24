<?php

use App\Http\Controllers\Administrator\DeveloperController;
use App\Http\Controllers\Administrator\DokumenController;
use App\Http\Controllers\Administrator\ElemenSmartController;
use App\Http\Controllers\Administrator\KategoriUmumController;
use App\Http\Controllers\Administrator\OpdController;
use App\Http\Controllers\Administrator\InovasiController;
use App\Http\Controllers\Administrator\KategoriForumController;
use App\Http\Controllers\Administrator\TopikForumController;
use App\Http\Controllers\Administrator\Verifikasi\InovasiController as VerifikasiInovasiController;
use App\Http\Controllers\Administrator\Verifikasi\VersiController as VerifikasiVersiController;
use App\Http\Controllers\Administrator\VersiController;
use Illuminate\Support\Facades\Route;
use Hexters\Ladmin\Routes\Ladmin;

use App\Http\Controllers\Inovasi\InoController as InovasiC;

use App\Http\Controllers\Forum\KategoriController;
use App\Http\Controllers\Forum\TopikController;
use App\Http\Controllers\Forum\KomentarController;
use App\Http\Controllers\ProfilController;
use App\Models\Forum\Kategori;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Ladmin::route(function () {
    Route::prefix('account')->as('account.')->middleware(['verified'])->group(function () {
        Route::resource('/opd', OpdController::class);
    });
    Route::prefix('kelola')->as('kelola.')->middleware(['verified'])->group(function () {
        Route::resource('/kategori-umum', KategoriUmumController::class);
        Route::resource('/elemen-smart', ElemenSmartController::class);
        Route::resource('/dokumen', DokumenController::class);
        Route::resource('/developer', DeveloperController::class);
        Route::resource('/inovasi', InovasiController::class);
        Route::resource('/versi', VersiController::class);
        Route::resource('/kategori-forum', KategoriForumController::class);
        Route::resource('/topik-forum', TopikForumController::class);
    });
    Route::prefix('verifikasi')->as('verifikasi.')->middleware(['verified'])->group(function () {
        Route::prefix('inovasi')->as('inovasi.')->group(function () {
            Route::get('/index', [VerifikasiInovasiController::class, 'index'])->name('index');
            Route::get('/verified/{id}', [VerifikasiInovasiController::class, 'verified'])->name('verified');
            Route::get('/get', [VerifikasiInovasiController::class, 'getdata'])->name('get');
            Route::get('/unverify/{id}', [VerifikasiInovasiController::class, 'unverify'])->name('unverify');
        });
        Route::prefix('versi')->as('versi.')->group(function () {
            Route::get('/index', [VerifikasiVersiController::class, 'index'])->name('index');
            Route::get('/verified/{id}', [VerifikasiVersiController::class, 'verified'])->name('verified');
            Route::get('/get', [VerifikasiVersiController::class, 'getdata'])->name('get');
            Route::get('unverify/{id}', [VerifikasiVersiController::class, 'unverify'])->name('unverify');
        });
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    //route yang butuh login ditaruh disini
    Route::post('/komentar/add/', [KomentarController::class, 'processAdd'])->middleware('auth');
    Route::get('/komentar/delete/{idkomen}', [KomentarController::class, 'delete']);
    Route::get('/komentar/update/{idkomen}', [KomentarController::class, 'update']);
    Route::post('/komentar/update/{idkomen}', [KomentarController::class, 'processUpdate']);
});

Route::middleware('guest')->group(function () {
    //route yang ga butuh login taruh disini

});


Route::post('/profil/update/{id}', [ProfilController::class, 'update']);

// FORUM
Route::get('/forum', [KategoriController::class, 'allCategories']);
Route::get('/forum/{id}', [TopikController::class, 'index']);
Route::get('/topiks', [TopikController::class, 'semua']); //search

Route::post('/topik/add/', [TopikController::class, 'processAdd']);
Route::get('/topik/delete/{idtopik}', [TopikController::class, 'delete']);
Route::get('/topik/update/{idtopik}', [TopikController::class, 'update']);
Route::post('/topik/update/{idtopik}', [TopikController::class, 'processUpdate', "active" => "inovasi"]);

Route::get('/topik/{id}', [KomentarController::class, 'show']);

// Route::get('/kategori/{kategori:id}', function (Kategori $kategori) {
//     return view('forum/topiks', [
//         'title' => "Post by kategori : $kategori->name",
//         "active" => "topiks",
//         'topiks' => $kategori->topiks->load('kategori', 'id'),
//         // 'kategori' => $kategori->name
//     ]);
// });

// <=====================================================================================================================>
// INOVASI
Route::get('/ino', [InovasiC::class, 'inovasi']);
Route::get('/', [InovasiC::class, 'index']);
Route::get('/home', [InovasiC::class, 'index']);
Route::post('/inovasi/kategori', [InovasiC::class, 'kategori']);
Route::post('/inovasi/read/{nama}', [InovasiC::class, 'read']);
Route::get('/inovasi/read/{nama}', [InovasiC::class, 'read']);
Route::post('/inovasi/kategori/search', [InovasiC::class, 'cari_kategori']);
// 
// <=====================================================================================================================>

require __DIR__ . '/auth.php';