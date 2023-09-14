<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admins_login', [App\Http\Controllers\AdminsController::class, 'admins_login'])->name('admins_login');
Route::post('/admins_login', [App\Http\Controllers\AdminsController::class, 'admins_login'])->name('admins_login');

Route::get('/admins_resister', [App\Http\Controllers\AdminsController::class, 'admins_resister'])->name('admins_resister');
Route::post('/admins_resister', [App\Http\Controllers\AdminsController::class, 'admins_resister'])->name('admins_resister');

Route::get('/admins_top', [App\Http\Controllers\AdminsController::class, 'admins_top'])->name('admins_top');

Route::get('/admins_banner', [App\Http\Controllers\AdminsController::class, 'admins_banner'])->name('admins_banner');

Route::get('/users_class', [App\Http\Controllers\UsersController::class, 'users_class'])->name('users_class');