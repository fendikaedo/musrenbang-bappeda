<?php

namespace App\Admin\Actions\Post;

use App\Imports\UsulanImport;
use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class ImportPost extends Action
{
    public $name = 'IMPORT DATA';

    protected $selector = '.import-post';

    public function handle(Request $request)
    {
         // Validasi file
         $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls'
        ]);
        // The following code gets the uploaded file, then uses the package `maatwebsite/excel` to process and upload your file and save it to the database.
        $file = $request->file('file');

        Excel::import(new UsulanImport,$file);

        return $this->response()->success('Import complete!')->refresh();
    }

    public function form()
    {

        $this->file('file', 'Please select file');
    }

    public function html()
    {
        return <<<HTML
        <a class="btn btn-sm btn-default import-post"><i class="fa fa-upload"></i>Import data</a>
HTML;
    }
}
