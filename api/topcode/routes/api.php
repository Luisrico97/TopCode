<?php

use App\Http\Controllers\Api\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrameworkController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\VoteController;
use App\Http\Controllers\Api\UserController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/frameworks', [FrameworkController::class, 'list']);
Route::get('/frameworks/{id}', [FrameworkController::class, 'item']);
Route::post('/frameworks/create', [FrameworkController::class, 'create']);
Route::post('/frameworks/update', [FrameworkController::class, 'update']);


Route::get('/comments', [CommentController::class, 'list']);
Route::get('/comments/{id}', [CommentController::class, 'item']);
Route::post('/comments/create', [CommentController::class, 'create']);
Route::post('/comments/update', [CommentController::class, 'update']);

Route::get('/languages', [LanguageController::class, 'list']);
Route::get('/languages/{id}', [LanguageController::class, 'item']);
Route::post('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages/update', [LanguageController::class, 'update']);

Route::get('/publications', [PublicationController::class, 'list']);
Route::get('/publications/{id}', [PublicationController::class, 'item']);
Route::post('/publications/create', [PublicationController::class, 'create']);
Route::post('/publications/update', [PublicationController::class, 'update']);

Route::get('/votes', [VoteController::class, 'list']);
Route::get('/votes/{id}', [VoteController::class, 'item']);
Route::post('/votes/create', [VoteController::class, 'create']);
Route::post('/votes/update', [VoteController::class, 'update']);

Route::get('/users', [UserController::class, 'list']);
Route::get('/users/{id}', [UserController::class, 'item']);
Route::post('/users/create', [UserController::class, 'create']);
Route::post('/users/update', [UserController::class, 'update']);
