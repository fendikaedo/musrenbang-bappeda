<?php

namespace App\Admin\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Skor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Skor());

        $grid->column('id', __('Id'));
        $grid->column('usulan_id', __('Usulan'));
        $grid->column('kriteria_id', __('Kriteria id'));
        $grid->column('skor', __('Skor'));
        $grid->column('penilaian.nama', __('Penilaian id'));

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
        $show = new Show(Skor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('usulan_id', __('Usulan id'));
        $show->field('kriteria_id', __('Kriteria id'));
        $show->field('skor', __('Skor'));
        $show->field('penilaian.nama', __('Penilaian id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Skor());
        $usulan_diterima = Usulan::all()->pluck('usulan','id');
        $daftar_kriteria = Kriteria::all()->pluck('nama','id');
        $daftar_penilai = Penilaian::all()->pluck('nama_penilai','id');

        $form->select('usulan_id', __('Usulan'))->options($usulan_diterima);
        $form->select('kriteria_id', __('Kriteria'))->options($daftar_kriteria);
        $form->number('skor', __('Skor'));
        $form->select('penilaian_id', __('Penilaian'))->options($daftar_penilai);

        return $form;
    }
}
