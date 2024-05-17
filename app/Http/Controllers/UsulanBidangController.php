<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Usulan;
use Illuminate\Http\Request;

class UsulanBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usulan = Usulan::where('pilihan', true)->get();
        $daftar_bidang = Bidang::all()->reject(function ($bidang) {
            return $bidang->nama === 'BK';
        });
        return view('form.bidang_infrastruktur.usulan',compact('daftar_bidang','usulan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('form.bidang_infrastruktur.form')->with([
            'usulan' => Usulan::all(),
            'daftar_bidang' => Bidang::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
