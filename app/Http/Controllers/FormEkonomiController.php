<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormEkonomiController extends Controller
{
    public function index(){
        return view('form.bidang_ekonomi.form');
    }
}
