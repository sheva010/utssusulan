@extends('layouts.app_template', ['title'=>'Data Mahasiswa'])
@section('content')
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="text-white">Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            
            <div class="row mb-4">
                <div class="col-6">
                    <a href="/mahasiswa/create" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="col-6">
                    <form action="/mahasiswa" method="GET">
                        <div class="input-group overflow-hidden">
                            <input type="search" class="form-control" name="query" id="search" value="{{old('query') ?? $query}}" placeholder="Cari..." style="background-color: #e7e6e6;">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $index => $item)
                            <tr>
                                <td>{{ $mahasiswa->perPage() * ($mahasiswa->currentPage() - 1) + ($index + 1) }}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->nomor_hp}}</td>
                                <td>
                                    <a href="/mahasiswa/{{$item->id}}/edit" class="btn btn-warning btn-sm ml-2">Edit</a>
                                    <form action="/mahasiswa/{{$item->id}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $mahasiswa->links() !!}
        </div>
    </div>
@endsection