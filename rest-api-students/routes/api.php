<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentsController;

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

# method GET
Route::get("/animals", [AnimalController::class, 'index']);

# method POST
Route::post("/animals", [AnimalController::class, 'store']);

# method PUT
Route::put("/animals/{id}", [AnimalController::class, 'update']);

# method DELETE
Route::delete("/animals/{id}", [AnimalController::class, 'destroy']);

# Routing untuk students

/**
 * route api resource bawaan laravel
 * Route::apiResource("/students", StudentsController::class);
 */

# Method GET All Resource
Route::get("/students", [StudentsController::class, 'index']);

# Method POST Add Resource
Route::post('/students', [StudentsController::class, 'store']);

# Method GET Detail Resource
Route::get('/students/{students}', [StudentsController::class, 'show']);

# Method UPDATE Resource
Route::put('/students/{students}', [StudentsController::class, 'update']);

# Method DELETE Resource
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);

# Flow: Route, Controller, Model
