@extends('layout/wrapper')
@section('content')
<h3>Tambah Data Hari</h3>
</p>
<div class="card">
    <div class="card-body">
<form action="{{ route('hari.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari"></td>
        </tr>               
        <tr>
            <td>
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </td>
        </tr>
    </table>
</form>
@endsection