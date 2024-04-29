<?php

namespace App\Admin\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KecamatanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kecamatan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kecamatan());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('kabupaten.nama', __('Kabupaten'));

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
        $show = new Show(Kecamatan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('kabupaten_id', __('Kabupaten'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kecamatan());
        $daftar_kabupaten = Kabupaten::all()->pluck('nama','id');

        $form->text('nama', __('Nama'));
        $form->select('kabupaten_id', __('Pilih Kabupaten'))->options($daftar_kabupaten);

        return $form;
    }
}
