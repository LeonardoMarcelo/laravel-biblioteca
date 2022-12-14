<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'product']);

// )  
Route::post(
    '/events',
    [EventController::class, 'store']
)->middleware('auth');

Route::get(
    '/create',
    [EventController::class, 'create']
)->middleware('auth');

Route::get(
    '/dashboard',
    [EventController::class, 'dashboard']
)->middleware('auth');

Route::get(
    '/events/edit/{id}',
    [EventController::class, 'edit']
)->middleware('auth');

Route::put(
    '/events/update/{id}',
    [EventController::class, 'update']
)->middleware('auth');

Route::delete(
    '/events/{id}',
    [EventController::class, 'destroy']
)->middleware('auth');