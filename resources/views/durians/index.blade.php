@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/durians/create') }}" class="btn btn-warning float-end mb-3">Tambah Durian</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Jenis Durian</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $durian)
            <tr class="text-center">
                <td>{{ $durian->id_durian }}</td>
                <td>{{ $durian->jenis_durian }}</td>
                <td>Rp. {{ $durian->harga_durian }}</td>
                <td>{{ $durian->ket_durian }}</td>
                <td width="100px"><a href="{{ url('durians/edit') }}/{{ $durian->id_durian }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('durians/destroy') }}/{{ $durian->id_durian }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Durian Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection