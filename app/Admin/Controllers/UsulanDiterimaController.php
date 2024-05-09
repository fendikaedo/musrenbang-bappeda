<?php

namespace App\Admin\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Opd;
use App\Models\Usulan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class UsulanDiterimaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Usulan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Usulan());
        $tahun = config('tahun');
        //auth roles bidang
        $grid->model()->where('tahun', '=', $tahun);
        $grid->model()->where('pilihan', '=', 1);
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();

            $kecamatan = Kecamatan::all()->pluck('nama', 'id');

            $kelurahan = Usulan::join('kelurahan', 'usulan.kelurahan_id', '=', 'kelurahan.id')
                ->pluck('kelurahan.nama', 'kelurahan.id');

            $filter->equal('kecamatan_id', 'Kecamatan')->select($kecamatan);
            $filter->equal('kelurahan_id', 'Kelurahan')->select($kelurahan);
        });
        //$grid->model()->where('status','<>', 'dibatalkan');

        //$grid->column('id', __('No'));
        $grid->column('id_usulan', __('Id Usulan'));
        //$grid->column('tanggal_usul', __('Tanggal Usul'));
        //$grid->column('pengusul', __('Pengusul'));
        //$grid->column('profil', __('Profil'));
        $grid->column('usulan', __('Usulan'));
        $grid->column('masalah', __('Masalah'));
        $grid->column('alamat', __('Alamat'));
        //$grid->column('kabupaten.nama', __('Kabupaten'));
        $grid->column('kecamatan.nama', __('Kecamatan'));
        $grid->column('kelurahan.nama', __('Kelurahan'));
        //$grid->column('latitude', __('Latitude'));
        //$grid->column('longitude', __('Longitude'));
        //$grid->column('usulan_ke', __('Usulan ke'));
        //$grid->column('opd.nama', __('OPD Tujuan Awal'));
        $grid->column('opd.nama', __('OPD Tujuan Akhir'));
        //$grid->column('status', __('Status'));
        //$grid->column('catatan', __('Catatan'));
        //$grid->column('rekomendasi_mitra', __('Rekomendasi Mitra'));
        //$grid->column('rekomendasi_kelurahan', __('Rekomendasi Kelurahan'));
        //$grid->column('rekomendasi_kecamatan', __('Rekomendasi Kecamatan'));
        //$grid->column('rekomendasi_skpd', __('Rekomendasi SKPD'));
        //$grid->column('rekomendasi_tapd', __('Rekomendasi TAPD'));
        //$grid->column('volume', __('Volume'));
        //$grid->column('satuan', __('Satuan'));
        //$grid->column('anggaran', __('Anggaran'));
        //$grid->column('jenis_belanja', __('Jenis Belanja'));
        $grid->column('pilihan', __('Kabupaten'));
        $grid->column('tahun', __('Tahun'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Usulan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('id_usulan', __('Id Usulan'));
        $show->field('tanggal_usul', __('Tanggal Usul'));
        $show->field('pengusul', __('Pengusul'));
        $show->field('profil', __('Profil'));
        $show->field('usulan', __('Usulan'));
        $show->field('masalah', __('Masalah'));
        $show->field('alamat', __('Alamat'));
        $show->field('kabupaten.nama', __('Kabupaten'));
        $show->field('kecamatan.nama', __('Kecamatan'));
        $show->field('kelurahan.nama', __('Kelurahan'));
        $show->field('latitude', __('Latitude'));
        $show->field('longitude', __('Longitude'));
        $show->field('usulan_ke', __('Usulan ke'));
        $show->field('opd.nama', __('OPD Tujuan Awal'));
        $show->field('opd.nama', __('OPD Tujuan Akhir'));
        $show->field('status', __('Status'));
        $show->field('catatan', __('Catatan'));
        $show->field('rekomendasi_mitra', __('Rekomendasi Mitra'));
        $show->field('rekomendasi_kelurahan', __('Rekomendasi Kelurahan'));
        $show->field('rekomendasi_kecamatan', __('Rekomendasi Kecamatan'));
        $show->field('rekomendasi_skpd', __('Rekomendasi SKPD'));
        $show->field('rekomendasi_tapd', __('Rekomendasi TAPD'));
        $show->field('volume', __('Volume'));
        $show->field('satuan', __('Satuan'));
        $show->field('anggaran', __('Anggaran'));
        $show->field('jenis_belanja', __('Jenis Belanja'));
        $show->field('sub_kegiatan', __('Sub Kegiatan'));
        $show->field('pilihan', __('Pilihan'));
        $show->field('tahun', __('Tahun'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Usulan());

        $kabupaten = Kabupaten::all()->pluck('nama', 'id');
        $kecamatan = Kecamatan::all()->pluck('nama', 'id');
        $kelurahan = Kelurahan::all()->pluck('nama', 'id');

        $hasil_opd = Opd::all()->pluck('nama', 'id');

        $pilihan_opd = [];
        foreach ($hasil_opd as $id => $nama) {
            $pilihan_opd[$id] = $nama;
        }

        $form->text('id_usulan', __('Id Usulan'));
        $form->date('tanggal_usul', __('Tanggal Usul'))->default(date('Y-m-d'));
        $form->text('pengusul', __('Pengusul'));
        $form->text('profil', __('Profil'));
        $form->text('usulan', __('Usulan'));
        $form->text('masalah', __('Masalah'));
        $form->text('alamat', __('Alamat'));
        $form->select('kabupaten_id', __('Pilih Kabupaten'))->options($kabupaten);
        $form->select('kecamatan_id', __('Pilih Kecamatan'))->options($kecamatan);
        $form->select('kelurahan_id', __('Pilih Kelurahan'))->options($kelurahan);
        $form->decimal('latitude', __('Latitude'));
        $form->decimal('longitude', __('Longitude'));
        $form->text('usulan_ke', __('Usulan ke'));
        $form->select('opd_id_awal', __('OPD Tujuan Awal'))->options($pilihan_opd);
        $form->select('opd_id_akhir', __('OPD Tujuan Akhir'))->options($pilihan_opd);
        $form->select('status', __('Status'));
        $form->text('catatan', __('Catatan'));
        $form->text('rekomendasi_mitra', __('Rekomendasi Mitra'));
        $form->text('rekomendasi_kelurahan', __('Rekomendasi Kelurahan'));
        $form->text('rekomendasi_kecamatan', __('Rekomendasi Kecamatan'));
        $form->text('rekomendasi_skpd', __('Rekomendasi SKPD'));
        $form->text('rekomendasi_tapd', __('Rekomendasi TAPD'));
        $form->decimal('volume', __('Volume'));
        $form->text('satuan', __('Satuan'));
        $form->textarea('anggaran', __('Anggaran'));
        $form->text('jenis_belanja', __('Jenis Belanja'));
        $form->text('sub_kegiatan', __('Sub Kegiatan'));
        $form->switch('pilihan', __('Pilihan'));
        $form->number('tahun', __('Tahun'));

        return $form;
    }
}
