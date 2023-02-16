@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'User')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User'])
    <div class="row mt-4 mx-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between pb-0">
                <h6>User</h6>
                @role('1')
                    <div class="justify-content-end">
                        <a href="{{ route('user.add') }}" class="btn btn-sm btn-primary rounded-pill" title="Add">Tambah User</a>
                    </div>
                @endrole
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-4">
                    <table class="table table-bordered table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{route('user.edit', $user->id )}}" class="btn btn-sm btn-primary rounded-pill btn-nol" title="Update">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            &nbsp;Edit
                                        </a>&nbsp;
                                        <a href="{{ route('user.delete', $user->id) }}" class="btn btn-sm btn-danger deleteBtn rounded-pill" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></i></a>
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