<?php

namespace App\Admin\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Usulan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KelurahanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kelurahan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kelurahan());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();

            $nama_kecamatan = Kecamatan::join('kelurahan', 'kecamatan.id', '=', 'kelurahan.kecamatan_id')
                ->pluck('kecamatan.nama', 'kecamatan.id');

            $filter->equal('kecamatan.id', 'Kecamatan')->select($nama_kecamatan);
        });

        $grid->column('id', __('No'));
        $grid->column('nama', __('Nama'));
        $grid->column('kecamatan.nama', __('Kecamatan'));


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
        $show = new Show(Kelurahan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('kecamatan_id', __('Kecamatan'));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kelurahan());

        $daftar_kecamatan = Kecamatan::all()->pluck('nama','id');

        $form->text('nama', __('Nama'));
        $form->select('kecamatan_id', __('Pilih Kecamatan'))->options($daftar_kecamatan);

        return $form;
    }
}
