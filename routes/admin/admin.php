<?php

// routes/admin.php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;
#->middleware('auth')
Route::get('/admin-login', [AdminUserController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin-login', [AdminUserController::class, 'login'])->name('login.admin');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.home');
});
