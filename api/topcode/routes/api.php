<?php

use App\Http\Controllers\Api\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrameworkController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\VoteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/frameworks', [FrameworkController::class, 'list']);
Route::get('/frameworks/{id}', [FrameworkController::class, 'item']);
Route::post('/frameworks/create', [FrameworkController::class, 'create']);
Route::post('/frameworks/update', [FrameworkController::class, 'update']);

Route::post('/login', [AuthController::class, 'login']);


Route::get('/publications', [PublicationController::class, 'list']);
Route::get('/publications/{id}', [PublicationController::class, 'item']);
Route::post('/publications/create', [PublicationController::class, 'create']);
Route::post('/publications/update', [PublicationController::class, 'update']);
Route::delete('/publications/delete/{id}', [PublicationController::class, 'delete']);

Route::get('/comments/{publicationId}', [CommentController::class, 'list']);
Route::get('/comments/{id}', [CommentController::class, 'item']);
Route::post('/comments/create', [CommentController::class, 'create']);
Route::post('/comments/update/{id}', [CommentController::class, 'update']);


Route::get('/languages', [LanguageController::class, 'list']);
Route::get('/languages/{id}', [LanguageController::class, 'item']);
Route::post('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages/update', [LanguageController::class, 'update']);

Route::get('/votes', [VoteController::class, 'list']);
Route::get('/votes/{id}', [VoteController::class, 'item']);
Route::post('/votes/create', [VoteController::class, 'create']);
Route::post('/votes/update', [VoteController::class, 'update']);

Route::get('/users', [UserController::class, 'list']);
Route::get('/users/{id}', [UserController::class, 'item']); 
Route::post('/users/create', [UserController::class, 'create']);
Route::post('/users/update/{id}', [UserController::class, 'update']);
Route::delete('/users/delete/{id}', [UserController::class, 'delete']);
