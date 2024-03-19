<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('', 'index');
    Route::get('/{id}', 'show');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('', 'store');
        Route::put('/{id}/update', 'update');
        Route::delete('/{id}/delete', 'destroy');
    });
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
