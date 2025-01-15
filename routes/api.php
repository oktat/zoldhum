<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PositionController;

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

Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees/{id}', [EmployeeController::class, 'show']);

<<<<<<< HEAD
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/employees', [EmployeeController::class, 'store']);
=======
Route::post('/employees', [EmployeeController::class, 'store']);



Route::group(['middleware' => ['auth:sanctum']], function () {
<<<<<<< HEAD
>>>>>>> bc1f991baf83df64225b77804aad3006c43784b7
=======
>>>>>>> bc1f991 (A dolgozókhoz letöltődik a beosztásuk is.)
>>>>>>> 3ddc610 (Az api.php változásai hozzádva)
    Route::put('/employees/{id}', [EmployeeController::class, 'update']);
    Route::patch('/employees/{id}', [EmployeeController::class, 'update']);
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);    
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('positions', PositionController::class);


