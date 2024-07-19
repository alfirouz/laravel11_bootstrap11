@extends('layout/wrapper')
@section('content')
<h3>Master Data Siswa</h3>
<div class="card">
<div class="card-header">
<a href="{{ route('siswa.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
<a class="btn btn-sm btn-success" href="{{ route('cetak_siswa') }}" target="_BLANK">Cetak Data Siswa</a>
</div>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($siswa as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_siswa }}</td>
            <td>{{ $row->nama_siswa }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->phone }}</td>
            <td>
              <button onclick="window.location='{{ route('siswa.edit', $row->id_siswa) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('{{ $row->nama_siswa }}')" style="display: inline" method="POST"  action="{{ url('siswa/'.$row->id_siswa) }}">
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

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
@endsection