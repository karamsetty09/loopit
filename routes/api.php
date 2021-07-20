<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;

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


//Route for register
Route::post('/register', [AuthController::class, 'register']);

//Route for Login
Route::post('/login', [AuthController::class, 'login']);


// Authentication provided by sanctum
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/cars', [CarController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Route to fetchin the user details
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Used for inserting car Records.
Route::prefix('/car')->group(function(){
    Route::post('/store', [CarController::class, 'store']);
});