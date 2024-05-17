<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Illuminate\Http\Request;

class FormSosbudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usulan = Usulan::where('pilihan', true)->get();
        $kriteria = Kriteria::all();
        $nama_penilai = Penilaian::all();
        return view('form.bidang_sosbud.form', compact('usulan', 'kriteria', 'nama_penilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.bidang_sosbud.form')->with([
            'usulan' => Usulan::all(),
            'kriteria' => Kriteria::all(),
            'penilaian' => Penilaian::all(),
            'skor' => Skor::all(),
        ]);
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
            'penilaian_id' => 'required',
        ]);
        if ($request) {
            $skorEkonomi = new Skor();
            $skorEkonomi->usulan_id = $request->usulan_id;
            $skorEkonomi->kriteria_id = $request->kriteria_id;
            $skorEkonomi->skor = $request->skor;
            $skorEkonomi->penilaian_id = $request->penilaian_id;
            if ($skorEkonomi->save()) {
                return redirect()->route('menubidang.index');
            } else {
                return back();
            }
        }
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
