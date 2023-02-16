@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Input Data')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Input Data'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('car.added') }}" method="POST">
                    @csrf
                    <div class="card px-0 pt-0 pb-2">
                        <div class="card-header">
                            <h6 class="mb-0">Tambah Data</h6>
                        </div>
                        <hr class="card-hr">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="namaBarang" class="form-control-label">Nama Barang</label>
                                    <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" id="namaBarang" name="namaBarang" placeholder="Masukkan Nama Barang..." value="{{ old('namaBarang') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="merk" class="form-control-label">Merk</label>
                                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" placeholder="Masukkan Merk...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="harga" class="form-control-label">Harga</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tempatDuduk" class="form-control-label">Jumlah Sheets</label>
                                    <input type="number" class="form-control @error('tempatDuduk') is-invalid @enderror" id="tempatDuduk" name="tempatDuduk" placeholder="Masukkan Jumlah Sheets...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="transmisi" class="form-control-label">Transmisi</label>
                                    <input type="text" class="form-control @error('transmisi') is-invalid @enderror" id="transmisi" name="transmisi" placeholder="Masukkan Transmisi...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="bahanBakar" class="form-control-label">Bahan Bakar</label>
                                    <input type="text" class="form-control @error('bahanBakar') is-invalid @enderror" id="bahanBakar" name="bahanBakar" placeholder="Masukkan Bahan Bakar...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="deskripsi" class="form-control-label">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan ...">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Input Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
