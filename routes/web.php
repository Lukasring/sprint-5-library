<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome', ['books' => \App\Models\Book::All()]);
})->name('index');

Auth::routes(['register' => false]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('authors', App\Http\Controllers\AuthorController::class);
    Route::resource('books', App\Http\Controllers\BookController::class);
});
