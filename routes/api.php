<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmailVerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\ApiForum;
use App\Http\Controllers\Forum\ApiKomentar;
use App\Http\Controllers\Forum\ApiTopik;
use App\Http\Controllers\Inovasi\ApiInovasi;
use App\Http\Controllers\Inovasi\ApiKategoriUmum;


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

Route::middleware('auth:sanctum')->group(function(){
    Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail']);
    Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify']);
    Route::post('logout', [AuthController::class, 'deleteToken']);
    Route::get('profile', function() {
        return auth()->user();
    });
});

Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [NewPasswordController::class, 'reset']);

Route::post('/token', [AuthController::class, 'requestToken']);
Route::post('/registrasi', [AuthController::class, 'register']);
Route::get('/kategori', [ApiForum::class, 'index']);
Route::get('/kategori/showparent', [ApiForum::class, 'showparent']);
Route::get('/topik/showimage/{id?}', [ApiTopik::class, 'showimage']);
Route::get('/kategori/showchild/{parent?}', [ApiForum::class, 'showchild']);
Route::get('/topik', [ApiTopik::class, 'index']);
Route::get('/komentar', [ApiKomentar::class, 'index']);

Route::get('/inovasi', [ApiInovasi::class, 'index']);
// Route::get('/kategoriumum', [ApiKategoriUmum::class, 'index']);
Route::get('/inovasi/showimage/{id?}', [ApiInovasi::class, 'showimage']);
