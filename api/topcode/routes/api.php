<?php

use App\Http\Controllers\Api\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrameworkController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\VoteController;
use App\Models\Comment;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/frameworks', [FrameworkController::class, 'list']);
Route::get('/frameworks/{id}', [FrameworkController::class, 'item']);
Route::post('/frameworks/create', [FrameworkController::class, 'create']);
Route::post('/frameworks/update', [FrameworkController::class, 'update']);
Route::post('/frameworks/update/{id}', [FrameworkController::class, 'update']);


Route::get('/comment', [CommentController::class, 'list']);
Route::get('/comment/{id}', [CommentController::class, 'item']);
Route::post('/comment/create', [FrameworkController::class, 'create']);
Route::post('/comment/update', [FrameworkController::class, 'update']);
Route::post('/comment/update/{id}', [FrameworkController::class, 'update']);

Route::get('/language', [LanguageController::class, 'list']);
Route::get('/language/{id}', [LanguageController::class, 'item']);
Route::post('/language/create', [FrameworkController::class, 'create']);
Route::post('/comment/update', [FrameworkController::class, 'update']);
Route::post('/comment/update/{id}', [FrameworkController::class, 'update']);

Route::get('/publication', [PublicationController::class, 'list']);
Route::get('/publication/{id}', [PublicationController::class, 'item']);
Route::post('/publication/create', [FrameworkController::class, 'create']);
Route::post('/comment/update', [FrameworkController::class, 'update']);
Route::post('/comment/update/{id}', [FrameworkController::class, 'update']);

Route::get('/vote', [VoteController::class, 'list']);
Route::get('/vote/{id}', [VoteController::class, 'item']);
Route::post('/vote/create', [FrameworkController::class, 'create']);
Route::post('/comment/update', [FrameworkController::class, 'update']);
Route::post('/comment/update/{id}', [FrameworkController::class, 'update']);