<?php

namespace App\Admin\Controllers;

use App\Models\Kabupaten;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KabupatenController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kabupaten';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kabupaten());
        $grid->column('id',__('Id'));
        $grid->column('nama',__('Nama'));
        


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
        $show = new Show(Kabupaten::findOrFail($id));
        
        $show->field('id',__('Id'));
        $show->field('nama',__('Nama'));




        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Kabupaten());

        $form->text('nama',__('Nama'));


        return $form;
    }
}
