<?php
use App\hTTP\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;


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

Route::get('/old', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/panel', [PanelController::class, 'index'])->name('panel');