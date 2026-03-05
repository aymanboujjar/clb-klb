<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blogs', [BlogController::class, 'index'])->name('user.blog');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('user.blog.show')->whereNumber('id');

Route::group(['middleware' => ['auth', 'role:admin', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('/blogs', [AdminPostController::class, 'index'])->name('admin.blog.index');
    Route::get('/blogs/create', [AdminPostController::class, 'create'])->name('admin.blog.create');
    Route::post('/blogs', [AdminPostController::class, 'store'])->name('admin.blog.store');
    Route::get('/blogs/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blogs/{post}', [AdminPostController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blogs/{post}', [AdminPostController::class, 'destroy'])->name('admin.blog.destroy');
});
