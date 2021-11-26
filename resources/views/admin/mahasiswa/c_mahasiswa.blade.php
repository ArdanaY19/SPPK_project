@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header" align="center"><h2>Tambah Data Mahasiswa</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mahasiswa') }}" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" value="{{ old('nama_mahasiswa') }}" autocomplete="nama_mahasiswa" autofocus>
                            @error('nama_mahasiswa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nim Mahasiswa</label>
                            <input type="text" name="nim_mahasiswa" id="nim_mahasiswa" class="form-control @error('nim_mahasiswa') is-invalid @enderror" value="{{ old('nim_mahasiswa') }}" autocomplete="nim_mahasiswa" autofocus>
                            @error('nim_mahasiswa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Prodi</label>
                            <input type="text" name="prodi" id="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi') }}" autocomplete="prodi" autofocus>
                            @error('prodi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="ttl" id="ttl" class="form-control @error('ttl') is-invalid @enderror" value="{{ old('ttl') }}" autocomplete="ttl" autofocus>
                            @error('ttl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{ url('mahasiswa') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-info">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
