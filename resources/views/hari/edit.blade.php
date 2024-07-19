@extends('layout.main')
@section('content')
<h3>Edit Data Hari</h3>
<div class="card">
    <div class="card-header">
<form action="{{ route('hari.update', $hari->HariID) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari" value="{{ $hari->NamaHari }}"></td>
        </tr>
        <tr>
            <td>
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </td>
        </tr>
    </table>
</form>
@endsection