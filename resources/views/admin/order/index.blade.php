@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('title', 'Order')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Order'])
    <div class="row mt-4 mx-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>List Order</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-4">
                    <table class="table table-bordered table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Sewa</th>
                                <th>Nama Penyewa</th>
                                <th>No. Telepon</th>
                                <th>Tanggal Sewa</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $order->noSewa }}</td>
                                    <td>{{ $order->nama }}</td>
                                    <td>{{ $order->noTelp }}</td>
                                    <td>{{ $order->tglSewa }}</td>
                                    <td>
                                        <a href="{{route('order.edit', $order->id )}}" class="btn btn-sm btn-primary rounded-pill btn-nol" title="Update">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            &nbsp;Edit
                                        </a>&nbsp;
                                        <a href="{{ route('order.delete', $order->id) }}" class="btn btn-sm btn-danger deleteBtn rounded-pill" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></i></a>
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