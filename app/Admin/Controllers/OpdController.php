<?php

namespace App\Admin\Controllers;

use App\Models\Bidang;
use App\Models\Opd;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OpdController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OPD';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Opd());

        $grid->column('id', __('No'));
        $grid->column('nama', __('Nama'));
        $grid->column('bidang.nama', __('Bidang'));

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
        $show = new Show(Opd::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('bidang_id', __('Bidang id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Opd());
        $daftar_bidang = Bidang::all()->pluck('nama','id');

        $form->text('nama', __('Nama'));
        $form->select('bidang_id', __('Pilih Bidang'))->options($daftar_bidang);

        return $form;
    }
}
