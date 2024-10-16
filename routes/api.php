<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\AuthController;

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

Route::post('/login', [AuthController::class, 'login']);

// Essa rota se mostrou necessária, uma vez que o middleware auth:sanctum não estava retornando corretamente a mensagem de erro e o status code 401
Route::get('/login', function () {
    return response()->json(['message' => 'Token indefinido'], 401);
})->name('login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Rotas Protegidas para Produto
Route::middleware('auth:sanctum')->apiResource('produtos', ProdutoController::class)->except([
    'create', 'show', 'edit'
]);
