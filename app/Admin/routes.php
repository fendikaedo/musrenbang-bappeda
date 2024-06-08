<?php

use App\Admin\Controllers\BadanKeuanganController;
use App\Admin\Controllers\BidangController;
use App\Admin\Controllers\EkonomiController;
use App\Admin\Controllers\KecamatanController;
use App\Admin\Controllers\OpdController;
use App\Admin\Controllers\KabupatenController;
use App\Admin\Controllers\KelurahanController;
use App\Admin\Controllers\KriteriaController;
use App\Admin\Controllers\StatusController;
use App\Admin\Controllers\UsulanController;
use App\Admin\Controllers\SkoringUsulanController;
use App\Admin\Controllers\PenilaianController;
use App\Admin\Controllers\KegiatanController;
use App\Admin\Controllers\SkorController;
use App\Admin\Controllers\UsulanDiterimaController;
use App\Admin\Controllers\InfrastrukturController;
use App\Admin\Controllers\SosbudController;
use App\Admin\Controllers\UsulanDiterimaBKController;
use App\Admin\Controllers\UsulanDiterimaEkonomiController;
use App\Admin\Controllers\UsulanDiterimaInfrastrukturController;
use App\Admin\Controllers\UsulanDiterimaSosbudController;
use Illuminate\Routing\Router;

Admin::favicon('');
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('bidang', BidangController::class);
    $router->resource('opd', OpdController::class);
    $router->resource('kabupaten', KabupatenController::class);
    $router->resource('kriteria', KriteriaController::class);
    $router->resource('status', StatusController::class);
    $router->resource('kecamatan', KecamatanController::class);
    $router->resource('usulan', UsulanController::class);
    $router->resource('skorusulan', SkoringUsulanController::class);
    $router->resource('kriteria', KriteriaController::class);
    $router->resource('kelurahan', KelurahanController::class);
    $router->resource('penilaian', PenilaianController::class);
    $router->resource('kegiatan', KegiatanController::class);
    $router->resource('skor', SkorController::class);
    $router->resource('usulanditerima', UsulanDiterimaController::class);
    $router->resource('bidanginfrastruktur', InfrastrukturController::class);
    $router->resource('bidangekonomi', EkonomiController::class);
    $router->resource('bidangsosbud', SosbudController::class);
    $router->resource('bidangbk', BadanKeuanganController::class);
    $router->resource('usulanditerimainfrastruktur', UsulanDiterimaInfrastrukturController::class);
    $router->resource('usulanditerimaekonomi', UsulanDiterimaEkonomiController::class);
    $router->resource('usulanditerimasosbud', UsulanDiterimaSosbudController::class);
    $router->resource('usulanditerimabk', UsulanDiterimaBKController::class);



});
