@extends('layout.main')
@section('content')
<h3>Edit Data Jadwal</h3>
<div class="card">
<div class="card-body">

<form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
@csrf
@method('PUT')
<table class="table table-borderless">
    <td>Guru</td>
        <td>
            <select name="id_guru" id="id_guru" class="form-select">
                @foreach($guru as $item)
                <option value="{{ $item->id_guru }}" {{ $item->id_guru == $jadwal->id_guru ? 'selected' : ''; }} > {{ $item->nama_guru }} </option>
                @endforeach
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Pelajaran</td>
        <td>
            <select name="id_pelajaran" id="id_pelajaran" class="form-select">
                @foreach($pelajaran as $item)
                <option value="{{ $item->id }}"> {{ $item->nama_pelajaran }} </option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td width="30%">Hari</td>
        <td><input type="date" name="hari" class="form-control" value="{{ $jadwal->hari }}"></td>
    </tr>
    <tr>
        <td>Jam Mulai</td>
        <td><input type="time" name="jam_mulai" class="form-control" value="{{ $jadwal->jam_mulai }}"></td>
    </tr>
    <tr>
    <tr>
        <td>
            <input type="submit" class="btn btn-success btn-sm" value="Simpan">
            <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
    </td>
    </tr>
</table>
</form>

@endsection