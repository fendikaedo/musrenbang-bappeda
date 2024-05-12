<?php

namespace App\Admin\Controllers;

use App\Models\Kegiatan;
use App\Models\Penilaian;
use Doctrine\DBAL\Schema\Index;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PenilaianController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Penilaian';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Penilaian());

        $grid->column('id', __('Id'));
        $grid->column('nama_penilai', __('Nama'));
        $grid->column('alamat_penilai', __('Alamat'));
        $grid->column('tlp_penilai', __('Telepon'));
        $grid->column('email_penilai', __('Email'));
        $grid->column('tanggal', __('Tanggal'));
        $grid->column('kegiatan_id', __('Kegiatan'));

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
        $show = new Show(Penilaian::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_penilai', __('Nama'));
        $show->field('alamat_penilai', __('Alamat'));
        $show->field('tlp_penilai', __('Telepon'));
        $show->field('email_penilai', __('Email'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('kegiatan_id', __('Kegiatan'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Penilaian());

        $daftar_kegiatan = Kegiatan::all()->pluck('nama', 'id');

        //$form->text('nama', __('Nama'));
        $form->text('nama_penilai', __('Nama'));
        $form->text('alamat_penilai', __('Alamat'));
        $form->number('tlp_penilai', __('Telepon'));
        $form->text('email_penilai', __('Email'));
        $form->date('tanggal', __('Tanggal'));
        $form->select('kegiatan_id', __('Pilih Kegiatan'))->options($daftar_kegiatan);

        return $form;
    }
//     /**
//     * Menyimpan data baru ke dalam penyimpanan.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {

//    }

}
