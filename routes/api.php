<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmailVerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Forum\ApiForum;
use App\Http\Controllers\API\Forum\ApiKomentar;
use App\Http\Controllers\API\Forum\ApiTopik;
use App\Http\Controllers\API\Inovasi\ApiInovasi;
use App\Http\Controllers\API\Inovasi\ApiElemen;
use App\Http\Controllers\API\Inovasi\ApiKategoriUmum;
use App\Http\Controllers\API\ApiUser;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail']);
    Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name("verification.verify");
    Route::post('/logout', [AuthController::class, 'deleteToken']);
    Route::get('/profile', function () {
        return auth()->user();
    });
});

// Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword']);
// Route::post('reset-password', [NewPasswordController::class, 'reset']);

Route::post('/token', [AuthController::class, 'requestToken']);
Route::get('/tokenID/{username?}', [AuthController::class, 'getID']);
Route::post('/registrasi', [AuthController::class, 'register']);

Route::get('/kategori', [ApiForum::class, 'index']);
Route::get('/kategori/showparent', [ApiForum::class, 'showparent']);
Route::get('/topik/showimage/{id?}', [ApiTopik::class, 'showimage']);
Route::get('/kategori/showchild', [ApiForum::class, 'showchild']);
Route::get('/topik', [ApiTopik::class, 'index']);
Route::get('/komentar', [ApiKomentar::class, 'index']);
Route::post('/komentar/add/{id?}', [ApiKomentar::class, 'add']);
Route::delete('/komentar/delete/{id?}', [ApiKomentar::class, 'delete']);

Route::get('/inovasi', [ApiInovasi::class, 'index']);
Route::get('/inovasi/dokumenIno/', [ApiInovasi::class, 'dokumenIno']);
Route::get('/inovasi/dokumenIno/showDokumen/{id?}', [ApiInovasi::class, 'showDokumen']);
Route::get('/inovasi/versiIno', [ApiInovasi::class, 'versiIno']);
// Route::get('/kategoriumum', [ApiKategoriUmum::class, 'index']);
Route::get('/inovasi/showimage/{id?}', [ApiInovasi::class, 'showimage']);
Route::get('/elemen', [ApiElemen::class, 'index']);

Route::get('/user', [ApiUser::class, 'index']);
Route::get('/user/showimage/{id?}', [ApiUser::class, 'showimage']);

// Route::get('/kategoriinovasi', [ApiKategoriUmum::class, 'index']);
Route::get('/varianInovasi', [ApiInovasi::class, 'varian']);
