<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\ApiForum;
use App\Http\Controllers\Forum\ApiKomentar;
use App\Http\Controllers\Forum\ApiTopik;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/kategori', [ApiForum::class, 'index']);
Route::get('/kategori/showparent', [ApiForum::class, 'showparent']);
Route::get('/topik/showimage/{id?}', [ApiTopik::class, 'showimage']);
Route::get('/kategori/showchild/{parent?}', [ApiForum::class, 'showchild']);
Route::get('/topik', [ApiTopik::class, 'index']);
Route::get('/komentar', [ApiKomentar::class, 'index']);
