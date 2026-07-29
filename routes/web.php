<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');
Route::inertia('/contacts/', 'Contacts')->name('contacts');
Route::resource('posts', PostController::class);

Route::middleware(['auth', 'verified'])->group(function () {});

require __DIR__.'/settings.php';
