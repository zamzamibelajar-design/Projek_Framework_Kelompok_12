<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ketua', function () {
    return view('selesai');
});
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
