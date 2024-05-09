<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\MenuBidangController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/loginuser', [LoginUserController::class, 'index']);
Route::get('/menubidang', [MenuBidangController::class, 'index']);

