<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\RegisterCustomerController;

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

Route::get('/dashboard', [DashboardCustomerController::class, 'index']);

Route::get('/login', [LoginCustomerController::class, 'index']);

Route::get('/register', [RegisterCustomerController::class, 'index']);