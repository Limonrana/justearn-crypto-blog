<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoryController;



Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    // Category Routes
    Route::resource('/categories', CategoryController::class)->only(['index', 'store', 'edit', 'destroy']);
    Route::put('/categories/update', [CategoryController::class, 'update'])->name('categories.update');

    // Tag Routes
    Route::resource('/tags', TagController::class)->only(['index', 'store', 'edit', 'destroy']);
    Route::put('/tags/update', [TagController::class, 'update'])->name('tags.update');

    // Blog Routes
    Route::resource('/blogs', BlogController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    // Account Related Routes
    Route::get('/account', [AccountController::class, 'account'])->name('account');
    Route::put('/account', [AccountController::class, 'updateAccount'])->name('account.update');
    Route::get('/account/change-password', [AccountController::class, 'changePassword'])->name('change.password');
    Route::put('/account/update-password', [AccountController::class, 'updatePassword'])->name('update.password');
});
