@extends('layout.main')
@section('content')
<h3>Tambah Data Jadwal</h3>
<div class="card">
    <div class="card-body">
<form action="{{ route('jadwal.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>

        <tr>
            <td>Guru</td><td>
                <select name="id_guru" class="form-select" id="inputGroupSelect01">
                    @foreach($guru as $item)
                    <option value='{{ $item->id_guru }}' data-value='{{ $item->id_guru }}' {{ $idguruplh == $item->id_guru ? 'selected' : '' }}>{{ $item->nama_guru }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>Pelajaran</td><td>
                <select name="id_pelajaran" class="form-select" id="inputGroupSelect01">
                    @foreach($pelajaran as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pelajaran }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td width="30%">Hari</td>
            <td><input type="date" name="hari" class="form-control"></td>
                </select>
            </td>
        </tr>
                  
        <tr>
            <td>Jam Mulai</td>
            <td><input type="time" name="jam_mulai" class="form-control"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection