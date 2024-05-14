<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Opd;
use App\Models\Usulan;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Table;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $jumlah_kecamatan = Kecamatan::count();
        $jumlah_kelurahan = Kelurahan::count();
        $jumlah_opd = Opd::count();
        $jumlah_usulan = Usulan::count();

        $infoKecamatan = new InfoBox('Jumlah Kecamatan', 'kecamatan', 'yellow', '/admin/kecamatan', $jumlah_kecamatan);
        $infoKelurahan = new InfoBox('Jumlah Kelurahan/Desa', 'kelurahan', 'green', '/admin/kelurahan', $jumlah_kelurahan);
        $infoOpd = new InfoBox('Jumlah OPD', 'opd', 'red', '/admin/opd', $jumlah_opd);
        $infoUsulan = new InfoBox('Jumlah Usulan', 'usulan', 'aqua', '/admin/usulan', $jumlah_usulan);

        return $content
            ->title('<b>Dashboard<b>')
            ->description('Information')
            // ->row(Dashboard::title())
            ->row(function (Row $row) use ($infoKecamatan, $infoKelurahan, $infoOpd, $infoUsulan) {
                $row->column(3, function (Column $column) use ($infoKecamatan) {
                    $column->append($infoKecamatan->render());
                });

                $row->column(3, function (Column $column) use ($infoKelurahan) {
                    $column->append($infoKelurahan->render());
                });

                $row->column(3, function (Column $column) use ($infoOpd) {
                    $column->append($infoOpd->render());
                });
                $row->column(3, function (Column $column) use ($infoUsulan) {
                    $column->append($infoUsulan->render());
                });

                $row->column(3, function (Column $column) use ($infoKecamatan) {
                    $column->append(view('admin.charts.bar'));
                });

                $row->column(3, function (Column $column) use ($infoKecamatan) {
                    $column->append(view('admin.charts.doughnut'));
                });
            });
    }
}
