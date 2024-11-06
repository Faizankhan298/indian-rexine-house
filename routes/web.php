<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OwnerController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('owner.login');
Route::post('/owner/login', [OwnerController::class, 'login'])->name('owner.login.submit');
Route::get('/owner/logout', [OwnerController::class, 'logout'])->name('owner.logout');

Route::resource('products', ProductController::class)->except(['show']);