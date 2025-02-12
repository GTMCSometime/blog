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
        Route::get('/{category}', App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
    });

    Route::group(['prefix' => 'tags'], function() {
        Route::get('/', App\Http\Controllers\Admin\Tag\IndexController::class)->name('admin.tag.index');
        Route::get('/create', App\Http\Controllers\Admin\Tag\CreateController::class)->name('admin.tag.create');
        Route::post('/', App\Http\Controllers\Admin\Tag\StoreController::class)->name('admin.tag.store');
        Route::get('/{tag}', App\Http\Controllers\Admin\Tag\ShowController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', App\Http\Controllers\Admin\Tag\EditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', App\Http\Controllers\Admin\Tag\UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', App\Http\Controllers\Admin\Tag\DeleteController::class)->name('admin.tag.delete');
    });

    Route::group(['prefix' => 'posts'], function() {
        Route::get('/', App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
        Route::get('/create', App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
        Route::post('/', App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
        Route::get('/{post}', App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
        Route::get('/{post}/edit', App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
        Route::patch('/{post}', App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
        Route::delete('/{post}', App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');
    });
});





    Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('index');




