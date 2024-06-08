<?php

namespace App\Admin\Controllers;

use App\Models\Kriteria;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KriteriaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kriteria';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kriteria());

        $grid->column('id',__('No'));
        $grid->column('nama',__('Nama'));
        $grid->column('tahun',__('Tahun'));

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
        $show = new Show(Kriteria::findOrFail($id));

        $show->field('id',__('Id'));
        $show->field('nama',__('Nama'));
        $show->field('tahun',__('Tahun'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kriteria());

        $form->text('nama',__('Nama'));
        $form->number('tahun',__('Tahun'));

        return $form;
    }
}
