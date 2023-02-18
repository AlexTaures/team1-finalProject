<?php

use App\Http\Controllers\ControllerSale;
use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\presentationController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Customer Routes
Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/customers', [CustomersController::class, 'store']);
Route::put('/customers/{id}', [CustomersController::class, 'update']);

//Sales Routes
Route::get('/sales', [ControllerSale::class, 'index']);
Route::post('/sales', [ControllerSale::class, 'store']);
Route::put('/sales/{id}', [ControllerSale::class, 'update']);

//Brand Routes
Route::get('/brand', [brandController::class, 'index']);
Route::post('/brand', [brandController::class, 'store']);
Route::put('/brand/{id}', [brandController::class, 'update']);

//Presentation Routes
Route::get('/presentation', [presentationController::class, 'index']);
Route::post('/presentation', [presentationController::class, 'store']);
Route::put('/presentation/{id}', [presentationController::class, 'update']);

//Product Routes
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);