<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan1 = kecamatan::all();
        return view('kecamatan.index',compact('kecamatan1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kecamatan1 = kecamatan::all();
        kecamatan::create([
            'nama_kecamatan' => request('nama_kecamatan')
        ]);
        return redirect()->route('kecamatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($kecamatan)
    {
        $kecamatan1 = Kecamatan::find($kecamatan);
        return view('kecamatan.edit',compact('kecamatan1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update($kecamatan)
    {
        $kecamatan1 = kecamatan::find($kecamatan);
        $kecamatan1->update([
            'kd_kecamatan' => request('kd_kecamatan'),
            'nama_kecamatan' => request('nama_kecamatan')
        ]);
        return redirect()->route('kecamatan')->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($kecamatan)
    {
        $kecamatan1 = Kecamatan::find($kecamatan);
        $kecamatan1->delete();
        // 
        return redirect()->route('kecamatan')->with('success', 'Berhasil Menghapus Data');
    }
}
