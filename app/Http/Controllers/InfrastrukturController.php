<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfrastrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar_bidang = Bidang::all()->reject(function ($bidang) {
            return $bidang->nama === 'BK';
        });

        //$usulan = Usulan::where('pilihan', true)->get();
        $kriteria = Kriteria::all();
        $penilaian = Penilaian::all();
        // $usulan = DB::table('usulan')
        //     ->join('opd', 'usulan.opd_id_akhir', '=', 'opd.id')
        //     ->join('bidang', 'opd.bidang_id', '=', 'bidang.id')
        //     // ->select('usulan.pilihan', 'bidang.nama')
        //     ->where('usulan.pilihan',true)
        //     ->get();

        $usulan = Usulan::with(['opd.bidang'])->where('pilihan', true)->get();

        return view('form.bidang_infrastruktur.usulan', compact('daftar_bidang', 'usulan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->query('id');
        $usulan = DB::table('usulan')
            ->join('opd', 'usulan.opd_id_akhir', '=', 'opd.id')
            ->join('bidang', 'opd.bidang_id', '=', 'bidang.id')
            ->select('usulan.usulan','usulan.id', 'bidang.nama')
            ->where('usulan.pilihan',true,$id)
            ->get();
        $usulanId = Usulan::find($id);
        return view('form.bidang_infrastruktur.form')->with([
            'usulan' => $usulan,
            'usulanId' => $usulanId,
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
            $skorInfrastruktur = new Skor();
            $skorInfrastruktur->usulan_id = $request->usulan_id;
            $skorInfrastruktur->kriteria_id = $request->kriteria_id;
            $skorInfrastruktur->skor = $request->skor;
            $skorInfrastruktur->penilaian_id = $request->penilaian_id;
            if ($skorInfrastruktur->save()) {
                return redirect()->route('usulaninfrastruktur.index');
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
