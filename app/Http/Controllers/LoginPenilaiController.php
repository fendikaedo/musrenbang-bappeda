<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPenilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token_kegiatan = Kegiatan::all();
        return view('penilai.login',compact('token_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penilai.login')->with([
            'penilaian' => Penilaian::all(),
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penilai' => 'required',
            'alamat_penilai' => 'required',
            'tlp_penilai' => 'required',
            'email_penilai' => '',
            'tanggal' => 'required',
            'kegiatan_id' => 'required',
        ]);
        if ($request) {
            $penilai = new Penilaian();
            $penilai->nama_penilai = $request->nama_penilai;
            $penilai->alamat_penilai = $request->alamat_penilai;
            $penilai->tlp_penilai = $request->tlp_penilai;
            $penilai->email_penilai = $request->email_penilai;
            $penilai->tanggal = $request->tanggal;
            $penilai->kegiatan_id = $request->kegiatan_id;
            if ($penilai->save()) {
                return redirect()->route('menubidang.index',['penilai_id' => $penilai->id]);
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
