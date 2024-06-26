<?php

use App\Admin\Controllers\UsulanController as ControllersUsulanController;
use App\Http\Controllers\Chart\BarController;
use App\Http\Controllers\EkonomiController;
use App\Http\Controllers\FormInfrastrukturController;
use App\Http\Controllers\FormEkonomiController;
use App\Http\Controllers\FormSosbudController;
use App\Http\Controllers\FormUsulanController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\LoginPenilaiController;
use App\Http\Controllers\MenuBidangController;
use App\Http\Controllers\SosbudController;
use App\Http\Controllers\UsulanBidangController;
use App\Http\Controllers\UsulanController;
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
//Login Penilai
Route::resource('/loginpenilai', LoginPenilaiController::class);

//Menu Bidang
Route::resource('/menubidang', MenuBidangController::class)->except('index');
Route::get('/{penilai_id}/menubidang', [MenuBidangController::class, 'index'])->name('menubidang.index');

Route::resource('/usulan',UsulanController::class)->except('index','create');
Route::get('/{penilai_id}/usulan/bidang/{bidang}',[UsulanController::class, 'index'])->name('usulan.index');
Route::get('/{penilai_id}/usulan/create/{id_usulan}', [UsulanController::class, 'create'])->name('usulan.create');

