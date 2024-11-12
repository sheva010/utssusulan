<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <form action="/mahasiswa" method="POST">
                @csrf
            </form>
            <div class="card p-0" style="width: 80%;">
                <form action="/mahasiswa" method="POST">
                    @csrf
                    <div class="card-header bg-dark">
                        <h5 class="text-white">Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="name" placeholder="Masukan Nama" value="{{old('nama')}}" required>
                            <span class="text-danger">{{$errors->first('nama')}}</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{old('alamat')}}" required>
                            <span class="text-danger">{{$errors->first('alamat')}}</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor_hp" class="form-label">Nomor Hp</label>
                            <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="nomor_hp" placeholder="Masukan Nomor Hp" value="{{old('nomor_hp')}}" required>
                            <span class="text-danger">{{$errors->first('nomor_hp')}}</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary mr-2" type="submit">Simpan</button>
                        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>