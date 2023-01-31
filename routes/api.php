<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function() {
    return 'Testni odgovor primljen!';
});

Route::apiResource('roles', RoleController::class);
Route::apiResource('types', TypeController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('games', GameController::class);
Route::apiResource('submits', SubmitController::class);

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout'])
        ->middleware('auth:sanctum');;
    Route::get('user', [AuthController::class, 'user'])
        ->middleware('auth:sanctum');
});