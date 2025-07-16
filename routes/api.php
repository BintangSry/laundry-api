<?php

use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);
Route::apiResource('pesanan', PesananController::class);
Route::apiResource('detail', DetailPesananController::class);
Route::apiResource('layanan', LayananController::class);
Route::apiResource('pembayaran', PembayaranController::class);
Route::post('/login', [UserController::class, 'login']);
