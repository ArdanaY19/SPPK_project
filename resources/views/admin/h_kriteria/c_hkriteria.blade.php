@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header" align="center"><h2>Tambah Data Himpunan Kriteria</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('h_kriteria') }}" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kriteria</label>
                            <select class="form-control select2" name="kriteria_id" id="kriteria_id">
                                <option disabled value>Pilih Nama Kriteria</option>
                                @foreach ($kriteria as $krit)
                                <option value="{{ $krit->id }}">{{ $krit->nama_kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Himpunan</label>
                            <input type="text" name="nama_himpunan" id="nama_himpunan" class="form-control @error('nama_himpunan') is-invalid @enderror" value="{{ old('nama_himpunan') }}" autocomplete="nama_himpunan" autofocus>
                            @error('nama_himpunan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nilai</label>
                            <input type="text" name="nilai" id="nilai" class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai') }}" autocomplete="nilai" autofocus>
                            @error('nilai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" autocomplete="keterangan" autofocus>
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{ url('h_kriteria') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-info">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
