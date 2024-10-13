<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', WelcomeController::class);
/**
 * Rota com método informado
 */
// Route::get('/', [WelcomeController::class, 'index']);
/**
 * Rota que já retorna o resultado de uma função na propria linha
 */
Route::get('/outra-rota', fn () => 'oi');
