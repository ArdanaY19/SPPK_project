@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-dark"><i class="fas fa-chart-bar"></i> Data Kriteria</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mb-2 mt-2">
                            <a class="btn btn-info mb-3" href="{{ url('kriteria/create') }}">Tambah Data</a>
                        </div>
                    </div>
                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Atribut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($kriterias as $kriteria)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $kriteria->nama_kriteria }}</td>
                                    <td>{{ $kriteria->atribut }}</td>
                                    <td>
                                        <form action="{{ url('kriteria/'.$kriteria->id) }}" method="post">
                                            <a href="{{ url('kriteria/'.$kriteria->id) }}" class="btn btn-success"><i class='fa fa-edit'></i></a>
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
