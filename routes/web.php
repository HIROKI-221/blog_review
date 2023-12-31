<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/', [PostController::class, 'index']);
Route::get('/reviews/create', [PostController::class, 'create']);
Route::get('/reviews/{review}', [PostController::class, 'show']); 
Route::get('/reviews/{review}/edit', [PostController::class, 'edit']);
Route::put('/reviews/{review}', [PostController::class, 'update']);
Route::delete('/reviews/{review}', [PostController::class,'delete']);
Route::post('/reviews', [PostController::class, 'store']);

