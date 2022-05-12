<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/votar', [EventController::class, 'votar']);
Route::get('/events/resultado', [EventController::class, 'resultado']);
Route::get('/events/{id}', [EventController::class, 'show'])->middleware('auth');
Route::post('/events', [EventController::class, 'store']);
Route::post('/events/votacao', [EventController::class, 'votacao']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

