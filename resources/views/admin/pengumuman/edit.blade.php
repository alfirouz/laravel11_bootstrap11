@extends('layout.main')
@section('content')
<h3>Edit Data Pengumuman</h3>
</p>
<div class="card">
    <div class="card-body">
<form action="{{ route('pengumuman.update', $pengumuman->id_pengumuman) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Judul pengumuman</td><td><input type="text" name="judul" value="{{ $pengumuman->judul }}"></td>
        </tr>
        <tr>
            <td>Isi pengumuman</td><td><input type="text" name="isi_pengumuman" value="{{ $pengumuman->isi_pengumuman }}"></td>
        </tr>
        <tr>
            <td>
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </td>
        </tr>
    </table>
</form>
@endsection