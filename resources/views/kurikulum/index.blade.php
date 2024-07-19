@extends('layout/wrapper')
@section('content')

<h3>Master Data Kurikulum</h3>
<div class="card">
        <div class="card-header">
        <a href="{{ route('kurikulum.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Kurikulum</td>
                <td>Tahun</td>
                <td>Aksi</td>
            </tr>
            </thead>
            @foreach ($kurikulum as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_kurikulum }}</td>
                    <td>{{ $rows->tahun }} </td>
                    <td>
              
                                     

                    <form action="{{ route('kurikulum.destroy', $rows->id) }}" method="POST">
                    <a href="{{ route('kurikulum.edit', $rows->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">HAPUS</button>
                        </form>  </td>
                  
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection