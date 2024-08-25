<?php

// routes/admin.php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
#->middleware('auth')
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Add other admin routes here
});
