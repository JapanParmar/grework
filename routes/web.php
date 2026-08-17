<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products.all');
Route::get('/products/category/{category}', [PageController::class, 'products'])->name('products.category');
Route::get('/product/{slug}', [PageController::class, 'productDetail'])->name('products.show');
Route::get('/catalogue', [PageController::class, 'catalogue'])->name('catalogue');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/enquiry', [PageController::class, 'enquiry'])->name('enquiry');
Route::post('/enquiry/submit', [PageController::class, 'submitEnquiry'])->name('enquiry.submit');
