<?php

namespace App\Admin\Controllers;

use App\Models\Kegiatan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KegiatanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kegiatan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kegiatan());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('tempat', __('Tempat'));
        $grid->column('tanggal', __('Tanggal'));
        $grid->column('token', __('Token'));
        $grid->column('token_expired', __('Token expired'));
        
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
        $show = new Show(Kegiatan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('tempat', __('Tempat'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('token', __('Token'));
        $show->field('token_expired', __('Token expired'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kegiatan());

        $form->text('nama', __('Nama'));
        $form->text('tempat', __('Tempat'));
        $form->date('tanggal', __('Tanggal'))->default(date('Y-m-d'));
        $form->text('token', __('Token'));
        $form->datetime('token_expired', __('Token expired'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
