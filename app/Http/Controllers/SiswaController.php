<?php

namespace App\Http\Controllers;

use App\Models\Siswa_model;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa_model::get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view ('siswa.add');
    }

    public function store(Request $request)
    {
       $siswa = new Siswa_model;
       $siswa->id_siswa     = $request->id_siswa;
       $siswa->nama_siswa   = $request->nama_siswa;
       $siswa->alamat       = $request->alamat;
       $siswa->phone        = $request->phone;
       $siswa->gender       = $request->gender;
       $siswa->save();
       return redirect()->route('siswa.index');

    }

    public function edit(Siswa_model $siswa_model, $id_siswa)
    {        
        // echo $id_siswa;
        $siswa = Siswa_model::find($id_siswa);
        return view('siswa.edit', compact('siswa'));
        
    }

    public function update(Request $request, Siswa_model $siswa_model, $id_siswa)
    {
        $siswa = Siswa_model::find($id_siswa);
        $siswa->id_siswa = $request->id_siswa;
        $siswa->nama_siswa   = $request->nama_siswa;
        $siswa->alamat       = $request->alamat;
        $siswa->phone        = $request->phone;
        $siswa->gender       = $request->gender;
        $siswa->save();
        return redirect('siswa')->with('msg', 'Edit'. $siswa->nama_siswa.' berhasil');
    }

    public function destroy(Siswa_model $siswa_model, $id_siswa)
    {
        Siswa_model::find($id_siswa)->delete();
        return redirect()->route('siswa.index');;
    }

    public function cetak_siswa(){
        $siswa = Siswa_model::get();
        return view ('siswa.cetak_siswa', compact('siswa'));
    }
}
