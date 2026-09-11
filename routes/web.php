<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

// Public Front-End Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products.all');
Route::get('/products/category/{category}', [PageController::class, 'products'])->name('products.category');
Route::get('/product/{slug}', [PageController::class, 'productDetail'])->name('products.show');
Route::get('/catalogue', [PageController::class, 'catalogue'])->name('catalogue');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/enquiry', [PageController::class, 'enquiry'])->name('enquiry');
Route::post('/enquiry/submit', [PageController::class, 'submitEnquiry'])->name('enquiry.submit');

// Admin Panel Authentication Routes
Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::match(['get', 'post'], '/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Guarded Admin Control Panel Routes
Route::middleware(['admin.auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Product Management Routes
    Route::get('/products', [AdminController::class, 'products'])->name('products.index');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('products.store');
    Route::get('/products/{slug}/edit', [AdminController::class, 'editProduct'])->name('products.edit');
    Route::post('/products/{slug}/update', [AdminController::class, 'updateProduct'])->name('products.update');
    Route::post('/products/{slug}/delete', [AdminController::class, 'deleteProduct'])->name('products.delete');

    // Category Management Routes
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories.index');
    Route::post('/categories', [AdminController::class, 'storeCategory'])->name('categories.store');
    Route::post('/categories/{slug}/delete', [AdminController::class, 'deleteCategory'])->name('categories.delete');

    // Quote Enquiry Management Routes
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries.index');
    Route::post('/enquiries/{id}/status', [AdminController::class, 'updateEnquiryStatus'])->name('enquiries.status');
    Route::post('/enquiries/{id}/delete', [AdminController::class, 'deleteEnquiry'])->name('enquiries.delete');
});
