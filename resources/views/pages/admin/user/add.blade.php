@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Input User')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Input User'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('user.added') }}" method="POST">
                    @csrf
                    <div class="card px-0 pt-0 pb-2">
                        <div class="card-header">
                            <h6 class="mb-0">Tambah User</h6>
                        </div>
                        <hr class="card-hr">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="username" class="form-control-label">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan Username..." value="{{ old('username') }}">
                                    @error('username')<p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama" class="form-control-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama..." value="{{ old('nama') }}">
                                    @error('nama')<p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email..." value="{{ old('email') }}">
                                    @error('email')<p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
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
