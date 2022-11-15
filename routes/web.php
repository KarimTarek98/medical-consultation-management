<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/register', [DoctorController::class, 'register']);
Route::post('/register', [DoctorController::class, 'store']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'role:administrator'])->name('dashboard');

require __DIR__.'/auth.php';
