@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header" align="center"><h2>Tambah Data Kriteria</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('kriteria') }}" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kriteria</label>
                            <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control @error('nama_kriteria') is-invalid @enderror" value="{{ old('nama_kriteria') }}" autocomplete="nama_kriteria" autofocus>
                            @error('nama_kriteria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Atribut</label>
                            <input type="text" name="atribut" id="atribut" class="form-control @error('atribut') is-invalid @enderror" value="{{ old('atribut') }}" autocomplete="atribut" autofocus>
                            @error('atribut')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{ url('kriteria') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-info">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
