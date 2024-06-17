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
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        //MENGHITUNG JUMLAH TOTAL
        $jumlah_kecamatan = Kecamatan::count();
        $jumlah_kelurahan = Kelurahan::count();
        $jumlah_opd = Opd::count();
        $jumlah_usulan = Usulan::count();

        $infoKecamatan = new InfoBox('Jumlah Kecamatan', 'kecamatan', 'yellow', '/admin/kecamatan', $jumlah_kecamatan);
        $infoKelurahan = new InfoBox('Jumlah Kelurahan/Desa', 'kelurahan', 'green', '/admin/kelurahan', $jumlah_kelurahan);
        $infoOpd = new InfoBox('Jumlah OPD', 'opd', 'red', '/admin/opd', $jumlah_opd);
        $infoUsulan = new InfoBox('Jumlah Usulan', 'usulan', 'aqua', '/admin/usulan', $jumlah_usulan);


        //BAR CHART JUMLAH USULAN SETIAP KECAMATAN
        $usulanData = DB::table('usulan')
            ->select(DB::raw('count(*) as total'), 'kecamatan_id')
            ->groupBy('kecamatan_id')
            ->get();

        $labels = [];
        $data = [];

        foreach ($usulanData as $usulan) {
            $kecamatan = DB::table('kecamatan')->where('id', $usulan->kecamatan_id)->first();
            if ($kecamatan) {
                $labels[] = $kecamatan->nama;
                $data[] = $usulan->total;
            }
        }

        $chartKecamatan = [
            'labels' => $labels,
            'data' => $data
        ];

        //DOUGHNUT CHART MENGHITUNG JUMLAH  USULAN SEIAP BIDANG
        $dataUsulanBidang = DB::table('usulan')
            ->join('opd', 'usulan.opd_id_akhir', '=', 'opd.id')
            ->join('bidang', 'opd.id', '=', 'bidang.id')
            ->select(DB::raw('count(*) as total'), 'bidang.id')
            ->groupBy('bidang.id')
            ->get();

        $labels = [];
        $data = [];

        foreach ($dataUsulanBidang as $usulanBidang) {
            $bidang = DB::table('bidang')->where('id', $usulanBidang->id)->first();
            if ($bidang) {
                $labels[] = $bidang->nama;
                $data[] = $usulanBidang->total;
            }
        }

        $chartBidang = [
            'labels' => $labels,
            'data' => $data
        ];


        return $content
            ->title('<b>Dashboard<b>')
            ->description('Information')
            // ->row(Dashboard::title())
            ->row(function (Row $row) use ($infoKecamatan, $infoKelurahan, $infoOpd, $infoUsulan, $chartKecamatan, $chartBidang) {
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

                $row->column(8, function (Column $column) use ($chartKecamatan) {
                    $column->append(view('admin.charts.bar', ['chartKecamatan' => $chartKecamatan]));
                });

                $row->column(4, function (Column $column) use ($chartBidang) {
                    $column->append(view('admin.charts.doughnut', ['chartBidang' => $chartBidang]));
                });
            });
    }
}
