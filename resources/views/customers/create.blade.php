@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color:#39ac39;">
        <form method="post" action="{{ url('customers/store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Customers</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Customers" name="nama_cust" value="{{ old('nama_cust') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Durian</label>
                <div class="col-sm-8">
                    <select name="durian_cust" class="form-select">
                        <option value="">Pilih...</option>
                        @foreach ($durians as $durian)
                        <option value="{{ $durian->id_durian }}">{{ $durian->jenis_durian }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kuantiti</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Kuantiti" name="pesanan_cust" value="{{ old('pesanan_cust') }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Tambah</button>
        </form>
    </div>

</div>
@endsection