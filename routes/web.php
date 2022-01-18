<?php

use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('filmes')->group(function(){

    Route::get('/inserir', [FilmeController::class, 'create'])->name('filme.create');
    Route::post('/inserir', [FilmeController::class, 'store']);
    Route::get('/{id}', [FilmeController::class, 'show'])->name('filme.show');

});
Route::get('/', [FilmeController::class, 'index'])->name('home');
