<?php

use Illuminate\Support\Facades\Route;


Route::inertia('/', 'Home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
});

require __DIR__.'/settings.php';
