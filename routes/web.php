<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\CreateUser;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('all', [AllController::class, 'allArticle']);
Route::get('article/{id}', [DetailsController::class, 'details']);
Route::get('new', [NewController::class, 'newform']);
Route::post('new', [NewController::class, 'newArticle']);
Route::get('edit/{id}', [EditController:: class, 'showedit']);
Route::post('edit/{id}', [EditController:: class, 'update']);
Route::get('sup/{id}', [EditController:: class, 'destroy']);
