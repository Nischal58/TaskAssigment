<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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


Route::get('/', [VideoController::class,'index']);
Route::get('/create', [VideoController::class,'new']);
Route::post('/store', [VideoController::class,'store']);
Route::get('/edit/{id}', [VideoController::class,'edit']);
Route::put('/update/{id}', [VideoController::class,'update']);
Route::get('/delete/{id}', [VideoController::class,'destroy']);
Route::get('/show/{id}', [VideoController::class,'show']);









