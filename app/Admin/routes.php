<?php

use App\Admin\Controllers\BidangController;
use App\Admin\Controllers\DataController;
use App\Admin\Controllers\OpdController;
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
    $router->resource('data_usulan', DataController::class);
});
