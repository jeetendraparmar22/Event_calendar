<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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



// User routes
Route::get('/', [UserController::class, 'index'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create_user', [UserController::class, 'createUser'])->name('create_user');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// Event routes
Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');
Route::resource('events', EventController::class);
