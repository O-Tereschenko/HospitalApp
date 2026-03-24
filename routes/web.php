<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('doctors', AdminDoctorController::class)->only([
        'index', 'show', 'destroy'
    ]);
});