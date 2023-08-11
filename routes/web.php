<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Employee\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/database/employee/all_employee/get', [EmployeeController::class, 'list']);
    // Route::get('/database/employee/all_employee', [EmployeeController::class, 'index']);
    Route::resource('/database/employee/all_employee', EmployeeController::class);

});

// @ ARTISAN ROUTE
Route::get('optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
Route::get('route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
Route::get('cache-clear', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
Route::get('view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
Route::get('config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Config cache cleared</h1>';
});

Route::get('all-clear', function () {
    Artisan::call('optimize:clear');
    return '<h1>All cache cleared</h1>';
});


require __DIR__.'/auth.php';
