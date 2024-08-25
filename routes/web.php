<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;


Route::controller(ThemeController::class)->name("theme.")->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/about', 'about')->name('about');
    Route::get('/cart', 'showCart')->name('cart');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'Contact')->name('contact');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/check-out', 'checkout')->name('check-out');
});

Route::post("/contact", [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
