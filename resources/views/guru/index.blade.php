@extends('layout/wrapper')
@section('content')
<h3>Master Data Guru</h3>
<div class="card">
<div class="card-header">
<a href="{{ route('guru.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
<a class="btn btn-sm btn-success" href="{{ route('cetak_guru') }}" target="_BLANK">Cetak Data Guru</a>
</div>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Guru</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($guru as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_guru }}</td>
            <td>{{ $row->nama_guru }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->phone }}</td>
            <td>
              <button onclick="window.location='{{ route('guru.edit', $row->id_guru) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('{{ $row->nama_guru }}')" style="display: inline" method="POST"  action="{{ url('guru/'.$row->id_guru) }}">
                @csrf
                @method('DELETE')
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
@endsection