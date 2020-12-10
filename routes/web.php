<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientDetailsController;
use App\Http\Controllers\Liste_des_clientsController;


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
    return view('admin.admin_login');
});

Route::get('dashboard', [dashboardController::class, 'dashboard']);

Route::get('clients', [Liste_des_clientsController::class, 'index']);


Route::get('clients/client_numero/{id}', [ClientDetailsController::class, 'edit_client']);

Route::post('clients/client_numero/{id}', [ClientDetailsController::class, 'update_client']);  
