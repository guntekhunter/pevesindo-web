<?php

use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');
Route::view('/blog', 'blog');
Route::view('/franchise', 'franchise');
Route::view('/blog-detail', 'blog-detail ');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
