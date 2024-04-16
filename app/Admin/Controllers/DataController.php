<?php

namespace App\Admin\Controllers;

use App\Models\DataUsulan;
use App\Models\Opd;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DataController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Data Usulan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DataUsulan());

        $grid->column('id', __('Id'));
        $grid->column('usulan', __('Usulan'));
        $grid->column('masalah', __('Masalah'));
        $grid->column('kecamatan', __('Kecamatan'));
        $grid->column('kelurahan', __('Kelurahan'));
        $grid->column('opd.nama', __('OPD Tujuan Akhir'));


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
        $show = new Show(DataUsulan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('usulan', __('Usulan'));
        $show->field('masalah', __('Masalah'));
        $show->field('kecamatan', __('Kecamatan'));
        $show->field('kelurahan', __('Kelurahan'));
        $show->field('opd_id', __('Opd id'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DataUsulan());
        $daftar_opd = Opd::all()->pluck('nama','id');

        $form->text('usulan', __('Usulan'));
        $form->text('masalah', __('Masalah'));
        $form->text('kecamatan', __('Kecamatan'));
        $form->text('kelurahan', __('Kelurahan'));
        $form->select('opd_id', __('Pilih OPD'))->options($daftar_opd);


        return $form;
    }
}
