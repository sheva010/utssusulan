<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $mahasiswa = \App\Models\Mahasiswa::where('nama', 'like', "%{$query}%")
                ->orWhere('alamat', 'like', "%{$query}%")
                ->orWhere('nomor_hp', 'like', "%{$query}%")
                ->paginate(10);
        } else {
            $mahasiswa = \App\Models\Mahasiswa::latest()->paginate(10);
        }

        
        return view('mahasiswa_index', compact('mahasiswa', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reqData = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'nomor_hp'=>'required',
        ]);

        $mahasiswa = new \App\Models\Mahasiswa();

        $mahasiswa->fill($reqData);
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('pesan','Data Berhasil ditambahkan');
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
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        return view('mahasiswa_edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reqData = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'nomor_hp'=>'required',
        ]);

        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);

        $mahasiswa->fill($reqData);
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('pesan','Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('pesan','Data berhasil dihapus');
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     $mahasiswa = \App\Models\Mahasiswa::where('nama', 'like', "%{$query}%")
    //                         ->orWhere('alamat', 'like', "%{$query}%")
    //                         ->orWhere('nomor_hp', 'like', "%{$query}%")
    //                         ->paginate(10);

    //     return view('mahasiswa_index', compact('mahasiswa'));
    // }
}
