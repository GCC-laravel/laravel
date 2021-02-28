<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/test', function(){
    return 'test';
});
Route::get('/{name?}', function (Request $request) {
    return $request->get('name');
});

// laravel 8
Route::get('/users/index', [UsersController::class, 'index']);

// before laravel 8
Route::get('/users/index','UsersController@index');
