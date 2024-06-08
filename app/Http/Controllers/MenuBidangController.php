<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class MenuBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($penilai_id)
    {
        $bidang = Bidang::all()->reject(function ($bidang) {
            return $bidang->nama === 'Badan Keuangan';
        });
        $penilai = Penilaian::find($penilai_id);
        // Jika penilaian tidak ditemukan, kembalikan 404 atau redirect dengan pesan error
        if (!$penilai) {
            return redirect()->route('loginpenilai.index')->withErrors(['message' => 'Data penilaian tidak ditemukan.']);
        }
        return view('penilai.menu_bidang', compact('bidang','penilai'));
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
