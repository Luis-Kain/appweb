<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\RegisterCustomerController;
use App\Http\Controllers\OrdersCustomerController;
use App\Http\Controllers\SalesCustomerController;
use App\Http\Controllers\RoutesCustomerController;
use App\Http\Controllers\RolesAdminController;
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

Route::get('/', [LoginCustomerController::class, 'index']);

Route::get('/dashboard', [DashboardCustomerController::class, 'index']);

Route::get('/register', [RegisterCustomerController::class, 'index']);

Route::get('/orders',[OrdersCustomerController::class, 'index']);

Route::get('/sales', [SalesCustomerController::class,'index']);

Route::get('/routes', [RoutesCustomerController::class, 'index'])->name('routes');

Route::get('/admin', [RolesAdminController::class, 'index']);