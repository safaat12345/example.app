<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.index')->with([
            'pegawai' => pegawai::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'alamat' => 'required|min:3',
            'email' => 'required|min:3',
        ]);

        $pegawai = new pegawai;
        $pegawai->name = $request->name;
        $pegawai->alamat = $request->alamat;
        $pegawai->email = $request->email;
        $pegawai->save();

        return to_route('pegawai.index')->with('success','Data Berhasil di Tambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('pegawai.edit')->with([
        'pegawai' => Pegawai::find($id),
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'alamat' => 'required|min:3',
            'email' => 'required|min:3',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->name = $request->name;
        $pegawai->alamat = $request->alamat;
        $pegawai->email = $request->email;
        $pegawai->save();

        return to_route('pegawai.index')->with('success','Data Berhasil di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return back()->with('succes','Data Berhasil di Hapus.');
    }
}
