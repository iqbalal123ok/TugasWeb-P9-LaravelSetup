<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::post('/contact', [PostController::class, 'sendContact'])->name('contact.send');

Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => $nama]);
})->where('nama', '[A-Za-zÀ-ÿ\s\-]+')->name('hello');
