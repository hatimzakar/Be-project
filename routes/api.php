<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personController;
use App\Http\Controllers\productController;
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

//person API's
route::get('/person',[personController::class,'all']);
route::get('/person/{id}',[personController::class,'show']);
route::post('/person',[personController::class,'add']);
Route::delete('/person/{id}',[personController::class,'delete']);
Route::put('/person/{person}',[personController::class,'update']);
// product API's
route::get('/product',[productController::class,'all']);
route::get('/product/{id}',[productController::class,'show']);
route::post('/product',[productController::class,'add']);
route::delete('/product/{id}',[productController::class,'delete']);
route::put('/product/{product}',[productController::class,'update']);



