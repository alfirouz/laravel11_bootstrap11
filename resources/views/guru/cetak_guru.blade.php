<body onload="window.print()">

<h1>Data Guru</h1>
<table border="1" width="75%">
    <tr>
        <td>No</td>
        <td>ID Guru</td>
        <td>Nama Guru</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>No Hp</td>
    </tr>

    @foreach($guru as $rows)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $rows->id_guru }}</td>
        <td>{{ $rows->nama_guru }}</td>
        <td>{{ $rows->gender }}</td>
        <td>{{ $rows->alamat }}</td>
        <td>{{ $rows->phone }}</td>
    </tr>
    @endforeach
</table>
    
</body>