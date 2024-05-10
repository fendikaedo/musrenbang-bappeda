<?php

use App\Http\Controllers\FormInfrastrukturController;
use App\Http\Controllers\FormEkonomiController;
use App\Http\Controllers\FormSosbudController;
use App\Http\Controllers\FormUsulanController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\MenuBidangController;
use Encore\Admin\Actions\Interactor\Form;
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
Route::get('/formusulan', [FormUsulanController::class, 'index']);
Route::get('/forminfrastruktur', [FormInfrastrukturController::class, 'index']);
Route::get('/formekonomi', [FormEkonomiController::class, 'index']);
Route::get('/formsosbud', [FormSosbudController::class, 'index']);

