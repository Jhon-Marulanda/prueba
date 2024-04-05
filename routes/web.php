<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/registro', [AuthController::class, 'registro']);
Route::post('/registro', [AuthController::class, 'form']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/validateAge', [AuthController::class, 'validar']);