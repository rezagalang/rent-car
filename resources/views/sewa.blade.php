@extends('layouts.front')

@section('title', 'Sewa Mobil')
@section('content')
    <section class="sectheader">
        <header class="header" id="header">
            <div class="container">
                <img src="{{ asset('img/logob.png') }}" alt="">
                <ul class="mainmenu" id="mainmenu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sewa') }}" class="{{ Route::has('sewa') ? 'active' : '' }}">Sewa Mobil</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="headcar">
                <div class="titlecar">
                    <h1>Banyak pilihan mobil</h1>
                    <h2>untuk kamu sewa</h2>
                </div>
                <div class="carbetween">
                    <div class="car1">
                        <img src="{{ asset('img/mobil/7.png') }}">
                    </div>
                    <div class="car2">
                        <img src="{{ asset('img/mobil/5.png') }}">
                    </div>
                    <div class="car3">
                        <img src="{{ asset('img/mobil/6.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectcar">
        <div class="container">
            <h2>Daftar Mobil</h2>
            <div class="shortdivider"></div>
            <div class="container-fluid py-4">
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-lg-4 mb-lg-0 mb-4 mt-9">
                            <div class="card z-index-2 h-100 card-product">
                                <div class="card-header pb-0 pt-3 bg-transparent product">
                                    @if ($car->image)
                                        <div>
                                            <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->namaBarang }}" class="img-fluid">
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize">{{ $car->namaBarang }}</h4>
                                    <h6>{{ 'Rp. '.$car->harga.' / Day' }}</h6>
                                    <a href="{{ route('detail', $car->id) }}" class="btn btn-warning">Lebih Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footwidget d-flex">
                <div class="col-5">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <p>RentCar adalah salah satu agen rental mobil. Kami memiliki berbagai macam kendaraan yang siap digunakan untuk perjalanan jauh maupun dekat. Seluruh armada kami selalu mendapatkan pengecekan dan perawatan secara rutin sehingga dipastikan semua kendaraan kami dalam keadaan baik saat disewa. Persyaratan yang mudah dan dengan biaya yang murah anda dapat menyewa armada kami untuk keperluan pribadi maupun rombongan.</p>
                </div>
                <div class="col-4">
                    <h4>Alamat</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam provident error eaque dolores voluptatum quas labore fugiat nostrum, omnis repellat? Libero facere non ab porro fuga commodi at quasi sed!</p>
                </div>
                <div class="col-2">
                    <h4>Kontak Kami</h4>
                    <p><i class="fab fa-lg fa-whatsapp"></i>&ensp; 0895 -3659-3000-16</p>
                    <p><i class="far fa-lg fa-envelope"></i>&ensp; Rentcar01@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>@ RentCar 2023. All Right Reserved.</p>
        </div>
    </footer>
@endsection
