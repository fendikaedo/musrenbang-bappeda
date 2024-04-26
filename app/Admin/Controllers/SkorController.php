<?php

namespace App\Admin\Controllers;

use App\Models\Skor;
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
        $grid->column('usulan_id', __('Usulan id'));
        $grid->column('kriteria_id', __('Kriteria id'));
        $grid->column('skor', __('Skor'));
        $grid->column('penilaian_id', __('Penilaian id'));

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
        $show->field('penilaian_id', __('Penilaian id'));

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

        $form->number('usulan_id', __('Usulan id'));
        $form->number('kriteria_id', __('Kriteria id'));
        $form->number('skor', __('Skor'));
        $form->number('penilaian_id', __('Penilaian id'));

        return $form;
    }
}
