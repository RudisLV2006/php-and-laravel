<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/greeting', function () {
    return view('welcome');
});


Route::get('book', [BookController::class, 'index']);
