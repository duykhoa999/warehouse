<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\ExportController;
use App\Http\Controllers\Api\ImportController;
use App\Http\Controllers\Api\EdetailController;
use App\Http\Controllers\Api\IdetailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Authentication

    Route::post('/login', [UserController::class, 'login']);

//User
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::put('/users/{user}', [UserController::class, 'update']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);

//Product
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{product}', [ProductController::class, 'show']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);

//Customer
    Route::get('/customers', [CustomerController::class, 'index']);
    Route::post('/customers', [CustomerController::class, 'store']);
    Route::get('/customers/{customer}', [CustomerController::class, 'show']);
    Route::put('/customers/{customer}', [CustomerController::class, 'update']);
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

//Supplier
    Route::get('/suppliers', [SupplierController::class, 'index']);
    Route::post('/suppliers', [SupplierController::class, 'store']);
    Route::get('/suppliers/{supplier}', [SupplierController::class, 'show']);
    Route::put('/suppliers/{supplier}', [SupplierController::class, 'update']);
    Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy']);

//Export
    Route::get('/exports', [ExportController::class, 'index']);
    Route::post('/exports', [ExportController::class, 'store']);
    Route::put('/exports/{export}', [ExportController::class, 'update']);     
    Route::get('/exports/{export}', [ExportController::class, 'show']);
    Route::delete('/exports/{export}', [ExportController::class, 'destroy']);

//Import
    Route::get('/imports', [ImportController::class, 'index']);
    Route::post('/imports', [ImportController::class, 'store']);
    Route::put('/imports/{import}', [ImportController::class, 'update']);   
    Route::get('/imports/{import}', [ImportController::class, 'show']);
    Route::delete('/imports/{import}', [ImportController::class, 'destroy']);

//Export Detail
    Route::get('/export-detail', [EdetailController::class, 'index']);
    Route::post('/export-detail', [EdetailController::class, 'store']);  
    Route::get('/export-detail/{export}', [EdetailController::class, 'show']);
    Route::put('/export-detail/{export}', [EdetailController::class, 'update']);
    Route::delete('/export-detail/{export}', [EdetailController::class, 'destroy']);

//Import Detail
    Route::get('/import-detail', [IdetailController::class, 'index']);
    Route::post('/import-detail', [IdetailController::class, 'store']);   
    Route::get('/import-detail/{import}', [IdetailController::class, 'show']);
    Route::put('/import-detail/{import}', [IdetailController::class, 'update']);
    Route::delete('/import-detail/{import}', [IdetailController::class, 'destroy']);

