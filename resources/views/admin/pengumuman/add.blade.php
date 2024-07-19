@extends('layout/wrapper')
@section('content')
<h3>Tambah Data Pengumuman</h3>
</p>
<div class="card">
<div class="card-body">
<form action="{{ route('pengumuman.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Judul Pengumuman</td><td><input type="text" name="judul"></td>
        </tr>

        <tr>
            <td>isi Pengumuman</td><td><input type="text" name="isi_pengumuman"></td>
        </tr>             
        <tr>
            <td>
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </td>
        </tr>
    </table>
</form>
</div>
</div>
@endsection