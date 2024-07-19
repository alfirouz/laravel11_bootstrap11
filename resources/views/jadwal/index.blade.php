@extends('layout.main')
@section('content')

<h3>Master Jadwal Pelajaran</h3>
</p>
<div class="card">
        <div class="card-header">
        <a href="{{ route('jadwal.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Pelajaran</td>
                <td>Jam Mulai</td>
                <td>Hari</td>
                <td>Aksi</td>
            </tr>
            </thead>
            @foreach ($jadwal as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_guru }}</td>
                    <td>{{ $rows->nama_pelajaran }}</td>
                    <td>{{ $rows->jam_mulai }} </td>
                    <td>{{ $rows->hari }} </td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jadwal.destroy', $rows->id) }}" method="POST">
                            <a href="{{ route('jadwal.edit', $rows->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif

</script>