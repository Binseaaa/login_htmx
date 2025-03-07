<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

// Route::middleware('guest')->group(function () {
//     Route::get('login', [AuthController::class, 'loginIndex']);
//     Route::post('login', [AuthController::class, 'login']);
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('admin')->middleware('isAdmin');
//     Route::get('/', [UserController::class, 'index'])->name('user');

//     Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// });
