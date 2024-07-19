@extends('layout.main')
@section('content')
<h3>Edit Data Kurikulum</h3>
</p>
<div class="card">
    <div class="card-header">
<form action="{{ route('kurikulum.update', $kurikulum->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Nama Kurikulum</td><td><input type="text" name="nama_kurikulum" value="{{ $kurikulum->nama_kurikulum }}"></td>
    </tr>
    <tr>
        <td>Tahun</td><td><input type="text" name="tahun" value="{{ $kurikulum->tahun }}"></td>
    </tr>
    <tr>
        <td><button type="submit" class="btn btn-sm btn-success">Simpan</button></td>
    </tr>
</table>
</form>

@endsection