<?php
use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
