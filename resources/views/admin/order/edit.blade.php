@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Edit Order')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Order'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card px-0 pt-0 pb-2">
                        <div class="card-header">
                            <h6 class="mb-0">Edit Order</h6>
                        </div>
                        <hr class="card-hr">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="noSewa" class="form-control-label">No. Sewa</label>
                                    <input type="text" class="form-control" id="noSewa" name="noSewa" value="{{ $order->noSewa }}" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama" class="form-control-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $order->nama }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $order->email }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="noTelp" class="form-control-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="noTelp" name="noTelp" value="{{ $order->noTelp }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="alamat" class="form-control-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $order->alamat }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="durasiSewa" class="form-control-label">Durasi Sewa</label>
                                    <input type="text" class="form-control" id="durasiSewa" name="durasiSewa" value="{{ $order->durasiSewa }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tglSewa" class="form-control-label">Tanggal Sewa</label>
                                    <input type="date" class="form-control" id="tglSewa" name="tglSewa" value="{{ $order->tglSewa }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tglSelesai" class="form-control-label">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="tglSelesai" name="tglSelesai" value="{{ $order->tglSelesai }}">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Update Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
