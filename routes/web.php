<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return view('login'); });
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta corregida para mostrar comentarios utilizando el controlador
Route::get('/comments', [CommentController::class, 'index'])->name('comments');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'role:admin'])->name('admin');




