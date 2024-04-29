<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $jumlah_kecamatan = Kecamatan::count();
        $jumlah_kelurahan = Kelurahan::count();

        $infoKecamatan = new InfoBox('Jumlah Kecamatan', 'kecamatan', 'aqua', '/admin/kecamatan', $jumlah_kecamatan);
        $infoKelurahan = new InfoBox('Jumlah Kelurahan', 'kelurahan', 'green', '/admin/kelurahan', $jumlah_kelurahan);

        return $content
            ->title('<b>Dashboard<b>')
            ->description('Information')
            ->row($infoKecamatan->render())
            ->row($infoKelurahan->render())
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
