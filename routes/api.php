<?php

use App\Http\Controllers\ControllerSale;
use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBrand;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CategoriesController;


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

Route::get('/brands', [ControllerBrand::class, 'index']);
Route::post('/brands', [ControllerBrand::class, 'store']);
Route::put('/brands/{id}', [ControllerBrand::class, 'update']);

//Presentation Routes
Route::get('/presentations', [PresentationController::class, 'index']);
Route::post('/presentations', [PresentationController::class, 'store']);
Route::put('/presentations/{id}', [PresentationController::class, 'update']);

//Product Routes
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::put('/products/amount/{id}', [ProductController::class, 'updateAmount']);

//Admin Routes
Route::get('/admins', [AdminsController::class, 'index']);
Route::post('/admins', [AdminsController::class, 'store']);
Route::put('/admins/{id}', [AdminsController::class, 'update']);

//Category Routes
Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);

