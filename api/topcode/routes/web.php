<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/old', function () {
    return view('welcome');
});

// Rutas relacionadas con el panel u otras rutas web
Route::get('/panel', [PanelController::class, 'index'])->name('panel');

// Ruta de la página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

//CRUDS
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/usercrud', function () {return view('usercrud');});

Route::get('/publicationcrud', function () {return view('publicationcrud');});