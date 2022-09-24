<?php


use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;



Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/account', [AccountController::class, 'account'])->name('account');
    Route::put('/account', [AccountController::class, 'updateAccount'])->name('account.update');
    Route::get('/account/change-password', [AccountController::class, 'changePassword'])->name('change.password');
    Route::put('/account/update-password', [AccountController::class, 'updatePassword'])->name('update.password');
});
