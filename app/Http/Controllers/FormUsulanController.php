<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormUsulanController extends Controller
{
    public function index(){
        return view('layouts.formusulan');
    }
}
