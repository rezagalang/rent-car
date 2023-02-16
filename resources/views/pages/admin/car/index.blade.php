@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Car')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Car'])
    <div class="row mt-4 mx-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Car</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-4">
                    <table class="table table-bordered table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Transmisi</th>
                                <th>Bahan Bakar</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $car->namaBarang }}</td>
                                    <td>{{ $car->harga }}</td>
                                    <td>{{ $car->transmisi }}</td>
                                    <td>{{ $car->bahanBakar }}</td>
                                    <td>
                                        <a href="{{route('car.edit', $car->id )}}" class="btn btn-sm btn-primary rounded-pill btn-nol" title="Update">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            &nbsp;Edit
                                        </a>&nbsp;
                                        <a href="{{ route('car.delete', $car->id) }}" class="btn btn-sm btn-danger deleteBtn rounded-pill" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></i></a>
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