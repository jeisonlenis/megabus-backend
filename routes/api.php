<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | API Routes |-------------------------------------------------------------------------- | | Here is where you can register API routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | is assigned the "api" middleware group. Enjoy building your API! | */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//gets de todos los datos de cada tabla
Route::get("/busstations", [\App\Http\Controllers\BusstationsController::class , 'index']);
Route::get("/cards", [\App\Http\Controllers\CardsController::class , 'index']);
Route::get("/sellers", [\App\Http\Controllers\SellersController::class , 'index']);
Route::get("/sells", [\App\Http\Controllers\SellsController::class , 'index']);
//gets por id 
Route::get("/busstations/{id}", [\App\Http\Controllers\BusstationsController::class , 'show']);
Route::get("/sellers/{id}", [\App\Http\Controllers\SellersController::class , 'show']);
Route::get("/sells/{id}", [\App\Http\Controllers\SellsController::class , 'show']);
Route::get("/cards/{id}", [\App\Http\Controllers\CardsController::class , 'show']);
//updates por tabla
Route::put("/cards/{card}", [\App\Http\Controllers\CardsController::class , 'update']);
Route::put("/cards/inventario/{card}", [\App\Http\Controllers\CardsController::class , 'updateInventario']);
Route::put("/sells/{sell}", [\App\Http\Controllers\SellsController::class , 'update']);
//insert de ventas
Route::post("/sells", [\App\Http\Controllers\SellsController::class , 'store']);
Route::post("/cards", [\App\Http\Controllers\CardsController::class , 'store']);
//delete de ventas
Route::delete("/sells/{id}", [\App\Http\Controllers\SellsController::class , 'destroy']);