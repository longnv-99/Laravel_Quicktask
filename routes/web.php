<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home']);
Route::resource('departments', DepartmentController::class);
Route::resource('users', UserController::class)->except(['create', 'show']);
Route::get('users/showCreate/{department}', [UserController::class, 'showCreate'])->name('users.showCreate');
Route::get('change-language/{locale}', [HomeController::class, 'changeLanguage'])->name('change-language');
