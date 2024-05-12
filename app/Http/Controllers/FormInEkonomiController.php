<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class FormInEkonomiController extends Controller
{
    public function index(){
        $kriteria = Kriteria::all();
        return view('form.bidang_ekonomi.form',compact('kriteria'));
    }
}
