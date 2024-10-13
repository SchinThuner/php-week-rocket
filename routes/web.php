<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// fazendo routes sem controller
// Route::view('/', 'projects.index')->name('projects.index');
// Route::view('/project/{project}', 'projects.show')->name('projects.show');

// rotas com controller
Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');


// Route::get('/', WelcomeController::class);
/**
 * Rota com método informado
 */
// Route::get('/', [WelcomeController::class, 'index']);
/**
 * Rota que já retorna o resultado de uma função na propria linha
 */
Route::get('/outra-rota', fn () => 'oi');
