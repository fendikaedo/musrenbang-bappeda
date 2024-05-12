<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class FormInfrastrukturController extends Controller
{
    public function index(){
        return view('form.bidang_infrastruktur.form');
    }
}
