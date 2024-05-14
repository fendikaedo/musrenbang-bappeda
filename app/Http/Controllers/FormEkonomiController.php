<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Illuminate\Http\Request;

class FormEkonomiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usulan = Usulan::where('pilihan', true)->get();
        $kriteria = Kriteria::all();
        $nama_penilai = Penilaian::all();
        return view('form.bidang_ekonomi.form', compact('usulan', 'kriteria', 'nama_penilai'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.bidang_ekonomi.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usulan_id' => 'required',
            'kriteria_id' => 'required',
            'skor' => 'required',
            'penilaian' => 'required',
        ]);
        Skor::create([
            'usulan_id' => $request->usulan_id,
            'kriteria_id' => $request->kriteria_id,
            'skor' => $request->skor,
            'penilaian_id' => $request->penilaian_id,
        ]);
        return redirect()->route('loginpenilai.index')->with('success', 'Data penilaian berhasil disimpan!');
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
        //
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
