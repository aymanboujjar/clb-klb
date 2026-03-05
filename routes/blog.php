<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blogs', [BlogController::class, 'index'])->name('user.blog');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('user.blog.show')->whereNumber('id');

Route::group(['middleware' => ['auth', 'role:admin', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('/blogs', [BlogController::class, 'adminIndex'])->name('admin.blog.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
});
