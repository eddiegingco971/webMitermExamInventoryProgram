<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersControllerAPI;
use App\Http\Controllers\API\OrdersControllerAPI;
use App\Http\Controllers\API\ProductsControllerAPI;
use App\Http\Controllers\API\Sales_DetailsControllerAPI;
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

Route::get('users-api', [UsersControllerAPI::class, 'usersAPI']);
Route::get('orders-api', [OrdersControllerAPI::class, 'ordersAPI']);
Route::get('products-api', [ProductsControllerAPI::class, 'productsAPI']);
Route::get('sales-api', [Sales_DetailsControllerAPI::class, 'salesAPI']);