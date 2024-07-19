@extends('layout/wrapper')
@section('content')


<h3>Tambah Data Kurikulum</h3>
</p>
<div class="card">
    <div class="card-body">
<form action="{{ route('kurikulum.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Kurikulum</td><td><input type="text" name="nama_kurikulum"></td>
    </tr>
    <tr>
        <td>Tahun</td><td><input type="text" name="tahun"></td>
    </tr>
    <tr>
        <td><button type="submit" class="btn btn-sm btn-success">Simpan</button></td>
    </tr>
</table>
</form>

@endsection