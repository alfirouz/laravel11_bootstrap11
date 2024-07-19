<?php

namespace App\Http\Controllers;

use App\Models\Guru_model;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru_model::get();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view ('guru.add');
    }

    public function store(Request $request)
    {
       $guru = new Guru_model;
       $guru->id_guru     = $request->id_guru;
       $guru->nama_guru   = $request->nama_guru;
       $guru->alamat       = $request->alamat;
       $guru->phone        = $request->phone;
       $guru->gender       = $request->gender;
       $guru->save();
       return redirect()->route('guru.index');

    }
    public function show(string $id)
    {
        //
    }

    public function edit(Guru_model $guru_model, $id_guru)
    {        
        // echo $id_guru;
        $guru = Guru_model::find($id_guru);
        return view('guru.edit', compact('guru'));
        
    }

    public function update(Request $request, Guru_model $guru_model, $id_guru)
    {
        $request->validate([
            'nama_guru' => 'required'
        ]);
        $guru = Guru_model::find($id_guru);
        $guru->id_guru = $request->id_guru;
        $guru->nama_guru   = $request->nama_guru;
        $guru->alamat       = $request->alamat;
        $guru->phone        = $request->phone;
        $guru->gender       = $request->gender;
        $guru->save();
        return redirect('guru')->with('msg', 'Edit'. $guru->nama_guru.' berhasil');
    }

    public function destroy(Guru_model $guru_model, $id_guru)
    {
        Guru_model::find($id_guru)->delete();
        return redirect()->route('guru.index');;
    }

    public function cetak_guru(){
        $guru = Guru_model::get();
        return view ('guru.cetak_guru', compact('guru'));
    }
}
