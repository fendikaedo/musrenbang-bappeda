<?php

use App\Admin\Controllers\BidangController;
<<<<<<< HEAD
use App\Admin\Controllers\KecamatanController;
=======
>>>>>>> 5c4ae8b85b546a10f6872fd950d5c033bc670835
use App\Admin\Controllers\OpdController;
use App\Admin\Controllers\KabupatenController;

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
<<<<<<< HEAD
    $router->resource('kecamatan', KecamatanController::class);
=======
    $router->resource('kabupaten', KabupatenController::class);
>>>>>>> 5c4ae8b85b546a10f6872fd950d5c033bc670835
});
