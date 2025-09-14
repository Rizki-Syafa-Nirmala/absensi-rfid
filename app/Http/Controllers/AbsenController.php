<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waktuabsen;
use App\Models\AbsenManual;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waktuabsens = Waktuabsen::all();
        $absenmanual = AbsenManual::first();
        return view('absen.absen', compact('waktuabsens', 'absenmanual'));
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
        $absen = WaktuAbsen::findOrFail($id);
        return view('absen.editabsen', compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jam_masuk' => 'required',
            'batas_masuk' => 'required',
            'jam_pulang' => 'required',
            'batas_pulang' => 'required',
        ]);

        $absen = WaktuAbsen::findOrFail($id);
        $absen->update($request->all());

        return redirect()->route('absen')->with('sukses', 'waktu absen berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
