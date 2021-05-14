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
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.delete');

//Product
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.delete');

//Customer
    Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customer.show');
    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customer.delete');

//Supplier
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('supplier.index');
    Route::post('/suppliers', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('supplier.show');
    Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('supplier.delete');

//Export
    Route::get('/exports', [ExportController::class, 'index'])->name('export.index');
    Route::post('/exports', [ExportController::class, 'store'])->name('export.store');   
    Route::get('/exports/{export}', [ExportController::class, 'show'])->name('export.show');
    Route::delete('/exports/{export}', [ExportController::class, 'destroy'])->name('export.delete');

//Import
    Route::get('/imports', [ImportController::class, 'index'])->name('import.index');
    Route::post('/imports', [ImportController::class, 'store'])->name('import.store');   
    Route::get('/imports/{import}', [ImportController::class, 'show'])->name('import.show');
    Route::delete('/imports/{import}', [ImportController::class, 'destroy'])->name('import.delete');

//ExportProduct
    Route::get('/edetails', [EdetailController::class, 'index'])->name('edetail.index');
    Route::post('/edetails', [EdetailController::class, 'store'])->name('edetail.store');   

// Route::group(['prefix' => 'api', 'as' => 'api.'], function() {
//     //      
        
        // Route::get('/users/create', 'UserController@create')->name('user.create');
        // Route::post('/users', 'UserController@store')->name('user.store');
        // Route::get('/users/{id}', 'UserController@show')->where('id','[0-9]+')->name('user.show');
        // Route::put('/users/{id}', 'UserController@update')->name('user.update');
        // Route::delete('/users/{id}', 'UserController@delete')->name('user.delete');
        
//         //    Category
//             Route::get('/categories', 'CategoryController@index')->name('category.index');
//             Route::get('/categories/create', 'CategoryController@create')->name('category.create');
//             Route::post('/categories', 'CategoryController@store')->name('category.store');
//             Route::get('/categories/{id}', 'CategoryController@show')->where('id','[0-9]+')->name('category.show');
//             Route::put('/categories/{id}', 'CategoryController@update')->name('category.update');
//             Route::delete('/categories/{id}', 'CategoryController@delete')->name('category.delete');
        
//         //    Product
//             Route::get('/products', 'ProductController@index')->name('product.index');
//             Route::get('/products/create', 'ProductController@create')->name('product.create');
//             Route::post('/products', 'ProductController@store')->name('product.store');
//             Route::get('/products/{id}', 'ProductController@show')->where('id','[0-9]+')->name('product.show');
//             Route::put('/products/{id}', 'ProductController@update')->name('product.update');
//             Route::delete('/products/{id}', 'ProductController@delete')->name('product.delete');
//             Route::patch('/products/{id}', 'ProductController@setFeaturedProduct')->name('product.setFeaturedProduct');
// });

