<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\RegisterCustomerController;
use App\Http\Controllers\InvoiceCustomerController;
use App\Http\Controllers\SalesCustomerController;
use App\Http\Controllers\RoutesCustomerController;
use App\Http\Controllers\RolesAdminController;
use App\Http\Controllers\AddClientCustomerController;
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

Route::get('/orders',[InvoiceCustomerController::class, 'index']);

Route::get('/sales', [SalesCustomerController::class,'index']);

Route::get('/routes', [RoutesCustomerController::class, 'index'])->name('routes');

Route::get('/admin', [RolesAdminController::class, 'index']);

Route::post('/register/succes',[RegisterCustomerController::class, 'store']);

Route::post('/orders/succes',[InvoiceCustomerController::class, 'store']);

Route::get('/admin/add',[AddClientCustomerController::class,'index']);

Route::post('/admin/add/succes',[AddClientCustomerController::class,'store']);

Route::get('/admin/edit/{id}',[RolesAdminController::class,'redirect']);

Route::post('/admin/update/{id}',[RolesAdminController::class,'update']);

Route::get('/admin/delete/{id}',[RolesAdminController::class,'destroy']);

Route::get('/invoice/delete/{id}',[InvoiceCustomerController::class,'destroy']);

Route::get('/invoice/edit/{id}',[InvoiceCustomerController::class, 'redirect']);

Route::post('/invoice/update/{id}',[InvoiceCustomerController::class,'update']);

Route::get('/sales/add',[SalesCustomerController::class,'index']);

Route::get('/sales/add/succes',[SalesCustomerController::class],'store');