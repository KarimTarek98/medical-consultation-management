<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'admin'])->name('dashboard');

require __DIR__.'/auth.php';
