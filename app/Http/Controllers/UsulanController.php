<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($bidang)
    {
        $kriteria = Kriteria::all();
        $penilaian = Penilaian::all();
        $usulan = DB::table('usulan')
            ->join('opd', 'usulan.opd_id_akhir', '=', 'opd.id')
            ->join('bidang', 'opd.bidang_id', '=', 'bidang.id')
            ->where('bidang.nama', $bidang)
            ->where('usulan.pilihan', true)
            ->select('usulan.id', 'usulan.usulan')
            ->get();
        $skor = Skor::with('usulan')->get();

        return view('usulan.index', compact('bidang', 'usulan', 'skor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->query('id');
        $usulanId = Usulan::find($id);
        $bidang = DB::table('bidang')
            ->join('opd', 'bidang.id', '=', 'opd.bidang_id')
            ->join('usulan', 'opd.id', '=', 'usulan.opd_id_akhir')
            ->where('usulan.id', $request->usulan_id)
            ->select('bidang.nama')
            ->first();
        return view('usulan.form')->with([
            // 'usulan' => $usulan,
            'bidang' => $bidang,
            'usulanId' => $usulanId,
            'kriteria' => Kriteria::all(),
            'penilaian' => Penilaian::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usulan_id' => 'required',
            'penilaian_id' => 'required',
            'kriteria.*.id' => 'required',
            'kriteria.*.skor' => 'required|integer|min:1|max:10',
        ]);

        foreach ($request->kriteria as $kriteria) {
            $skor = new Skor();
            $skor->usulan_id = $request->usulan_id;
            $skor->kriteria_id = $kriteria['id'];
            $skor->skor = $kriteria['skor'];
            $skor->penilaian_id = $request->penilaian_id;
            $skor->save();
        }
        $usulan = Usulan::find($request->usulan_id);
        $bidang = DB::table('bidang')
            ->join('opd', 'bidang.id', '=', 'opd.bidang_id')
            ->join('usulan', 'opd.id', '=', 'usulan.opd_id_akhir')
            ->where('usulan.id', $request->usulan_id)
            ->select('bidang.nama')
            ->first();

        if (!$bidang) {
            return redirect()->back()->withErrors(['usulan_id' => 'Bidang tidak ditemukan untuk usulan yang diberikan']);
        }

        return redirect()->route('usulan.index', ['bidang' => $bidang->nama]);
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
