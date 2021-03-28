<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PostsController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/posts', [PostsController::class, 'index'])->name('dashboard.posts.index');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('dashboard.posts.show');
Route::post('/posts/{post}/update', [PostsController::class, 'update'])->name('dashboard.posts.update');
Route::get('/users', [UsersController::class, 'index'])->name('dashboard.users.index');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('user.get');
