<?php

use Illuminate\Support\Facades\Route;
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
// * Main Route
Route::get('/', [UserController::class ,'index'])->name('index');

// * User Routes
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::POST('/create', [UserController::class, 'store'])->name('user.store');
