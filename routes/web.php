<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/', function () {
    return view('register.register');
});

Route::get('/masuk', function () {
    return view('login.login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
