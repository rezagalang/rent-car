@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Ubah Password')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Ubah Password'])
    <div class="container-fluid py-4 pt-6 pb-10">
        <div class="row">
            <form role="form" method="POST" action="{{ route('user.change') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-5">
                    <div class="card px-0 pt-0 pb-2">
                        <div class="card-header pb-3">
                            <h6 class="mb-0">Ubah Password</h6>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group">
                                    <label class="form-control-label">Password Baru</label>
                                    <input class="form-control" type="password" name="new_password" autocomplete="current-password" required="" placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Ketik Ulang Password Baru</label>
                                    <input class="form-control" type="password" name="new_confirm_password" autocomplete="current-password" required="" placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ms-auto">Ubah Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
