<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('/subjects', SubjectController::class);

Route::post('/comments/{subject}', [CommentController::class,'store'])->name('comments.store');
Route::put('/comments/{id}/edit', [CommentController::class,'edit'])->name('comments.edit');
Route::delete('/comments/{comment}', [CommentController::class,'destroy'])->name('comments.destroy');
Route::post('/reply/{comment}', [CommentController::class, 'storeReply'])->name('comments.storeReply');

Route::get('/', [SubjectController::class, 'index'])->name('home');
