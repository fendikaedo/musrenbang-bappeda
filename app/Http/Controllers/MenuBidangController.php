<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuBidangController extends Controller
{
    public function index(){
        return view('penilai.menu_bidang');
    }
}
