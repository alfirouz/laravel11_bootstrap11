@extends('layout.main')
@section('content')

<h3>Master Data Pelajaran</h3>
</p>
<div class="card">
<div class="card-header">
<a href="{{ route('pelajaran.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelajaran</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($pelajaran as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
       
            <td>{{ $row->nama_pelajaran }}</td>
           
        
              <td>
            <form action="{{ route('pelajaran.destroy', $row->id) }}" method="POST">
            <a href="{{ route('pelajaran.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
              @csrf 
              @method('delete')
              <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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