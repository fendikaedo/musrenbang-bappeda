<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSosbudController extends Controller
{
    public function index(){
        return view('form.bidang_sosbud.form');
    }
}
