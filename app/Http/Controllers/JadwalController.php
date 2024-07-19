<?php

namespace App\Http\Controllers;

use App\Models\Guru_model;
use App\Models\Hari_model;
use App\Models\Jadwal_model;
use App\Models\Pelajaran_model;
use App\Models\Siswa_model;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal_model::select('jadwal.*', 'guru.nama_guru','pelajaran.nama_pelajaran')
                ->join('guru', 'guru.id_guru','=','jadwal.id_guru')
                ->join('pelajaran', 'pelajaran.id','=','jadwal.id_pelajaran')
                ->get();
        return view ('jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $idguruplh = "";
        $guru = Guru_model::get();
        $pelajaran = Pelajaran_model::get();
        $hari = Hari_model::get();
       return view ('jadwal.add', compact('guru','idguruplh','pelajaran','hari'));
    }

    public function store(Request $request)
    {       
        $Jadwal = new Jadwal_model();
        $Jadwal->id_guru = $request->id_guru;
        $Jadwal->id_pelajaran = $request->id_pelajaran;
        $Jadwal->hari = $request->hari;
        $Jadwal->jam_mulai = $request->jam_mulai;
        $Jadwal->save();
        return redirect()->route('jadwal.index');        
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $jadwal = Jadwal_model::find($id);
        $guru = Guru_model::get();
        $pelajaran = Pelajaran_model::get();
        return view('Jadwal.edit', compact('jadwal', 'guru', 'pelajaran'));
    }

    public function update(Request $request, string $id)
    {
        $Jadwal = Jadwal_model::find($id);
        $Jadwal->hari = $request->hari;
        $Jadwal->jam_mulai = $request->jam_mulai;
        $Jadwal->id_guru = $request->id_guru;
        $Jadwal->id_pelajaran = $request->id_pelajaran;
        $Jadwal->update();
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(string $id)
    {
        $jadwal = Jadwal_model::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}
