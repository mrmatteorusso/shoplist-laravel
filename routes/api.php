<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopListController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/shop-lists', [ShopListController::class, 'index']);
Route::post('/shop-lists', [ShopListController::class, 'store']);
Route::put('/shop-lists/{id}', [ShopListController::class, 'update']);
Route::delete('/shop-lists/{id}', [ShopListController::class, 'destroy']);
Route::get('/shop-lists/{id}', [ShopListController::class, 'show']);

//Route::resource('/list', ShopListController::class);
