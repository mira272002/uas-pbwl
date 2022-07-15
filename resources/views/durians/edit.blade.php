@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card p-5" style="background-color: #39ac39;">
        <form method="post" action="{{ url('durians/update') }}/{{ $data->id_durian }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Durian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Jenis Durian" name="jenis_durian" value="{{ $data->jenis_durian }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_durian" value="{{ $data->harga_durian }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Keterangan" name="ket_durian" value="{{ $data->ket_durian }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
    </div>

</div>
@endsection