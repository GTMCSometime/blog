<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.index');
    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
        Route::get('/create', App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
        Route::post('/', App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
        });
    
});



    Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('index');




