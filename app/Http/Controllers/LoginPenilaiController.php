<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Penilaian;
use Illuminate\Http\Request;

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
        // return view('')->with([
        //     'penilaian' => Penilaian::all(),
        // ]);;
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
            'email_penilai' => 'required',
            'tanggal' => 'required',
            'kegiatan_id' => 'required',
        ]);
        Penilaian::create($request->all());

        return redirect()->route('penilai.menu_bidang')->with('success', 'Data penilaian berhasil disimpan!');
        // if ($request) {
        //     $user_penilai = new Penilaian();
        //     $user_penilai->nama_penilai = $request->nama_penilai;
        //     $user_penilai->alamat_penilai = $request->alamat_penilai;
        //     $user_penilai->tlp_penilai = $request->tlp_penilai;
        //     $user_penilai->email_penilai = $request->email_penilai;
        //     $user_penilai->tanggal = $request->tanggal;
        //     $user_penilai->kegiatan_id = $request->kegiatan_id;
        //     if ($user_penilai->save()) {
        //         return redirect()->route('admin.penilaian.create');
        //     } else {
        //         return back();
        //     }
        // }
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
