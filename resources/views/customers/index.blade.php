@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/customers/create') }}" class="btn btn-warning float-end mb-3">Tambah Customers</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Customers</th>
                <th>Jenis Durian</th>
                <th>Kuantiti</th>
                <th>Total</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($data as $customer)
            <tr class="text-center">
                <td>{{ $customer->id_cust }}</td>
                <td>{{ $customer->nama_cust }}</td>
                <td>{{ $customer->jenis_durian }}</td>
                <td>{{ $customer->pesanan_cust }}</td>
                <td>Rp. {{ $customer->pesanan_cust * $customer->harga_durian}}</td>
                <td width="100px"><a href="{{ url('customers/edit') }}/{{ $customer->id_cust }}" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="{{ url('customers/destroy') }}/{{ $customer->id_cust }}" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Customer Ini ?');">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection