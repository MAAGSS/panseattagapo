<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\BundleController;
use App\Models\Bundle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        $bundles = Bundle::all(); // Retrieve all bundles from the database
        $users = User::all();
        return view('dashboard', compact('bundles', 'users')); // Pass the bundles to the view
    })->name('dashboard');
    Route::post('/bundles', [BundleController::class, 'store'])->name('bundles.store');
    Route::post('/admin/staff', [StaffController::class, 'store'])->name('staff.store');

    

    // Profile Routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Posts Routes
    Route::resource('posts', PostController::class);
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/manage-staff', [AdminController::class, 'manageStaff'])->name('admin.manage.staff');
    Route::delete('/manage-staff/{id}', [AdminController::class, 'deleteStaff'])->name('admin.delete.staff');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/staff', [StaffController::class, 'index'])->name('staff.index'); // View staff list
    Route::get('/admin/staff/create', [StaffController::class, 'create'])->name('staff.create'); // Add staff

    Route::post('/admin/staff', [StaffController::class, 'store'])->name('staff.store'); // Store new staff

    // Store new staff

    Route::get('/admin/staff/{staff}/edit', [StaffController::class, 'edit'])->name('staff.edit'); // Edit staff
    Route::put('/admin/staff/{staff}', [StaffController::class, 'update'])->name('staff.update'); // Update staff
    Route::delete('/admin/staff/{staff}', [StaffController::class, 'destroy'])->name('staff.destroy'); // Delete staff
});

// Include Authentication Routes from Breeze
require __DIR__.'/auth.php';
