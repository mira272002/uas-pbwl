@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color:#39ac39;">
        @foreach ($data as $cust)
        <form method="post" action="{{ url('customers/update') }}/{{$cust->id_cust}}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Customers</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Customers" name="nama_cust" value="{{ $cust->nama_cust }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Durian</label>
                <div class="col-sm-8">
                    <select name="durian_cust" class="form-select">
                        <option value="{{ $cust->durian_cust }}">{{ $cust->jenis_durian }}</option>
                        @foreach ($durians as $durian)
                        <option value="{{ $durian->id_durian }}">{{ $durian->jenis_durian }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kuantiti</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Kuantiti" name="pesanan_cust" value="{{ $cust->pesanan_cust }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
        @endforeach
    </div>

</div>
@endsection