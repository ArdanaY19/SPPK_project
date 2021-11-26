@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-dark"><i class="fas fa-chart-bar"></i> Data Himpunan Kriteria</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mb-2 mt-2">
                            <a class="btn btn-info mb-3" href="{{ url('h_kriteria/create') }}">Tambah Data</a>
                        </div>
                    </div>
                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Nama Himpunan</th>
                                <th>Bobot</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($h_kriterias as $h_kriteria)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $h_kriteria->kriteria->nama_kriteria }}</td>
                                    <td>{{ $h_kriteria->nama_himpunan }}</td>
                                    <td>{{ $h_kriteria->nilai }}</td>
                                    <td>{{ $h_kriteria->keterangan }}</td>
                                    <td>
                                        <form action="{{ url('h_kriteria/'.$h_kriteria->id) }}" method="post">
                                            <a href="{{ url('h_kriteria/'.$h_kriteria->id) }}" class="btn btn-success"><i class='fa fa-edit'></i></a>
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
