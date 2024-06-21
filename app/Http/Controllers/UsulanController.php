<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skor;
use App\Models\Usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $penilai_id, $bidang)
    {
        $penilai = Penilaian::find($penilai_id);
        if (!$penilai) {
            return redirect()->route('loginpenilai.index')->withErrors(['message' => 'Data penilaian tidak ditemukan.']);
        }

        $kriteria = Kriteria::all();

        $usulan = DB::table('usulan')
            ->leftJoin('skor', function ($join) use ($penilai_id) {
                $join->on('usulan.id', '=', 'skor.usulan_id')
                    ->where('skor.penilaian_id', '=', $penilai_id);
            })
            ->join('opd', 'usulan.opd_id_akhir', '=', 'opd.id')
            ->join('bidang', 'opd.bidang_id', '=', 'bidang.id')
            ->select('usulan.id', 'usulan.usulan', DB::raw('SUM(skor.skor) as total_skor'))
            ->where('bidang.nama', $bidang)
            ->where('usulan.pilihan', true)
            ->groupBy('usulan.id', 'usulan.usulan')
            ->get();

        return view('usulan.index', compact('bidang', 'usulan', 'penilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $penilai_id, $id_usulan)
    {
        $usulan = Usulan::findOrFail($id_usulan);
        $gambarUsulan1 = $usulan->gambar1;
        $gambarUsulan2 = $usulan->gambar2;
        $gambarUsulan3 = $usulan->gambar3;
        $latitude = $usulan->latitude;
        $longitude = $usulan->longitude;

        // Ambil nama bidang dari parameter metode index()
        $bidang = $usulan->opd->bidang->nama;

        return view('usulan.form')->with([
            'bidang' => $bidang,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'gambarUsulan1' => $gambarUsulan1,
            'gambarUsulan2' => $gambarUsulan2,
            'gambarUsulan3' => $gambarUsulan3,
            'id_usulan' => $usulan,
            'kriteria' => Kriteria::all(),
            'penilai' => Penilaian::find($penilai_id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bidang = DB::table('bidang')
            ->join('opd', 'bidang.id', '=', 'opd.bidang_id')
            ->join('usulan', 'opd.id', '=', 'usulan.opd_id_akhir')
            ->where('usulan.id', $request->usulan_id)
            ->select('bidang.nama')
            ->first();

        // Validasi input
        $request->validate([
            'usulan_id' => 'required',
            'kriteria.*.id' => 'required',
            'kriteria.*.skor' => 'required|integer|min:1|max:10',
        ]);

        // Mengambil nama_penilai dari id penilai yang sudah login
        $penilaian = Penilaian::findOrFail($request->penilaian_id);
        $namaPenilai = $penilaian->nama_penilai;

        // Menyimpan setiap skor
        foreach ($request->kriteria as $kriteria) {
            $skor = new Skor();
            $skor->usulan_id = $request->usulan_id;
            $skor->kriteria_id = $kriteria['id'];
            $skor->skor = $kriteria['skor'];
            // Menggunakan penilaian_id dari request
            $skor->penilaian_id = $request->penilaian_id;
            $skor->save();
        }

        // Mengarahkan ke rute usulan.index dengan parameter nama bidang
        return redirect()->route('usulan.index', ['penilai_id' => $request->penilaian_id, 'bidang' => $bidang->nama]);
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
