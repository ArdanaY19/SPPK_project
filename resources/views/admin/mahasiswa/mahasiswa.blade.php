@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-dark"><i class="fas fa-male"></i> Data Mahasiswa</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mb-2 mt-2">
                            <a class="btn btn-info mb-3" href="{{ url('mahasiswa/create') }}">Tambah Data</a>
                        </div>
                    </div>
                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                    <td>{{ $mahasiswa->nim_mahasiswa }}</td>
                                    <td>{{ $mahasiswa->prodi }}</td>
                                    <td>{{ $mahasiswa->ttl }}</td>
                                    <td>
                                        {{-- <a href="{{ url('mahasiswa/'.$mahasiswa->id) }}" class="btn btn-secondary"><i class='fa fa-edit'></i> Edit</a> --}}
                                        <form action="{{ url('mahasiswa/'.$mahasiswa->id) }}" method="post">
                                            <a href="{{ url('mahasiswa/'.$mahasiswa->id) }}" class="btn btn-success"><i class='fa fa-edit'></i></a>
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger"><i class='fa fa-eraser'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
