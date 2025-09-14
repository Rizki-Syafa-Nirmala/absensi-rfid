<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasiswa = siswa::paginate(10);

        return view('siswa.siswa', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daftarkelas = Kelas::all();
        return view('siswa.tambahsiswa', compact('daftarkelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:1',
            'kelas_id' => 'required|exists:kelas,id',
            'uid' => 'required|string|max:255',
            'no_hp' => 'required|string|max:13',

        ]);

        Siswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas_id' => $request->kelas_id,
            'no_hp' => $request->no_hp,
            'uid' => $request->uid
        ]);

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil ditambahkan.');
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
        $siswa = Siswa::find($id);
        $daftarkelas = Kelas::all();
        return view('siswa.editsiswa', compact('siswa', 'daftarkelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:1',
            'kelas_id' => 'required|string|max:255',
            'uid' => 'required|string|max:255',
            'no_hp' => 'required|string|max:13',

        ]);

        $siswa = Siswa::find($id);
        $siswa->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas_id' => $request->kelas_id,
            'no_hp' => $request->no_hp,
            'uid' => $request->uid
        ]);

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
