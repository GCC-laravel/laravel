<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('welcome')
    ->with('title', 'title')
    ->with('posts', []);
});

// laravel 8
Route::get('/users/index', [UsersController::class, 'index'])->name('sdfsd');

// before laravel 8
Route::get('/users/index','UsersController@index');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// })->name('dashboard')
// ->middleware('auth');

Route::group(['prefix' => 'user/posts',
'middleware' => 'auth'], function(){
    Route::get('/', [PostsController::class, 'index'])->name('user.posts');
});

require __DIR__ . '/auth.php';