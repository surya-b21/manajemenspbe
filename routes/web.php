<?php

use App\Http\Controllers\Administrator\DeveloperController;
use App\Http\Controllers\Administrator\DokumenController;
use App\Http\Controllers\Administrator\ElemenSmartController;
use App\Http\Controllers\Administrator\KategoriUmumController;
use App\Http\Controllers\Administrator\OpdController;
use App\Http\Controllers\Administrator\InovasiController;
use App\Http\Controllers\Administrator\TopikForumController;
use App\Http\Controllers\Administrator\Verifikasi\InovasiController as VerifikasiInovasiController;
use App\Http\Controllers\Administrator\Verifikasi\VersiController as VerifikasiVersiController;
use App\Http\Controllers\Administrator\VersiController;
use Illuminate\Support\Facades\Route;
use Hexters\Ladmin\Routes\Ladmin;

use App\Http\Controllers\Forum\KategoriController;
use App\Http\Controllers\Forum\TopikController;
use App\Http\Controllers\Forum\KomentarController;
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
*/

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

Route::middleware(['auth','verified'])->group(function (){
    //route yang butuh login ditaruh disini
});

Route::middleware('guest')->group(function (){
    //route yang ga butuh login taruh disini
});

// FORUM
Route::get('/forum', [KategoriController::class, 'allCategories']);
Route::get('/forum/{id}', [TopikController::class, 'index']);
Route::get('/topik', [TopikController::class, 'semua']); //tambahan
// Route::post('/topik/add/', [TopikController::class, 'processAdd']);
// Route::get('/topik/delete/{idtopik}', [TopikController::class, 'delete']);
// Route::get('/topik/update/{idtopik}', [TopikController::class, 'update']);
// Route::post('/topik/update/{idtopik}', [TopikController::class, 'processUpdate', "active" => "inovasi"]);

Route::get('/topik/{id}', [KomentarController::class, 'show']);
Route::post('/komentar/add/', [KomentarController::class, 'processAdd'])->middleware('auth');
Route::get('/komentar/delete/{idkomen}', [KomentarController::class, 'delete']);
Route::get('/komentar/update/{idkomen}', [KomentarController::class, 'update']);
Route::post('/komentar/update/{idkomen}', [KomentarController::class, 'processUpdate']);

Route::get('/kategori/{kategori:id}', function (Kategori $kategori) {
    return view('forum/topiks', [
        'title' => "Post by kategori : $kategori->name",
        "active" => "topiks",
        'topiks' => $kategori->topiks->load('kategori', 'id'),
        // 'kategori' => $kategori->name
    ]);
});

// <=====================================================================================================================>
// INOVASI
Route::get('/inovasi', [InovasiController::class, 'inovasi']);
Route::get('/', 'App\Http\Controllers\Inovasi\InovasiController@index');
Route::get('/home', 'App\Http\Controllers\Inovasi\InovasiController@index');

// Inovasi
Route::get('/inovasi', [InovasiController::class, 'inovasi']);
//

// Kategori Inovasi
Route::post('/inovasi/kategori', [InovasiController::class, 'kategori']);
Route::get('/inovasi/kategori_layanan/{kategori}', 'App\Http\Controllers\Inovasi\InovasiController@kategori_layanan');
Route::get('/inovasi/kategori_smart/{kategori}', 'App\Http\Controllers\Inovasi\InovasiController@kategori_smart');
Route::get('/inovasi/kategori_umum/{kategori}', 'App\Http\Controllers\Inovasi\InovasiController@kategori_umum');
//

// Baca Inovasi
Route::get('/inovasi/read/{jenis}/{id_jenis}/{id_inovasi}', [InovasiController::class, 'read']);
//

// Cari Inovasi
// Route::get('/inovasi/cari_kategori', 'App\Http\Controllers\Inovasi\InovasiController@cari_kategori')->name('search');
Route::post('/inovasi/kategori/search', [InovasiController::class, 'cari_kategori']);
//

// <=====================================================================================================================>

require __DIR__ . '/auth.php';
