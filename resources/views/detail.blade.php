@extends('layouts.front')

@section('title', 'Detail')
@section('content')
    <section class="sectheader">
        <header class="header-2" id="header">
            <div class="container">
                <img src="{{ asset('img/logob.png') }}" alt="">
                <ul class="mainmenu" id="mainmenu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sewa') }}">Sewa Mobil</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="detailcar">
                <div class="col-lg-4 mb-lg-0 mb-4 p-2 mt-4">
                    <div class="card z-index-2 h-100 card-detail">
                        <div class="card-body p-3">
                            <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->namaBarang }}">
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <div class="merk">
                        <h2>{{ $car->namaBarang }}</h2>
                        <h5>{{ 'Rp. '.$car->harga.' / Day' }}</h5>
                    </div>
                    <div class="spek">
                        <h6 class="mt-4"><b>Spesifikasi : </b></h6>
                        <div class="speklist">
                            <p><img src="{{ asset('img/car-seat.png') }}">&nbsp;Tempat duduk : {{ $car->tempatDuduk }}</p>
                            <p><img src="{{ asset('img/gas-station.png') }}">&nbsp;Transmisi : {{ $car->transmisi }}</p>
                            <p><img src="{{ asset('img/gearbox.png') }}">&nbsp;Bahan Bakar : {{ $car->bahanBakar }}</p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a 
                            type specimen book.</p>
                    </div>
                    <a href="#" class="btn btn-warning">Sewa Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pilihan">
        <div class="container" id="conpilih">
            <h3>Pilihan Lain</h3>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach ($cars as $car)
                            <div class="card swiper-slide card-product">
                                    @if ($car->image)
                                        <div>
                                            <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->namaBarang }}" class="img-fluid">
                                        </div>
                                    @endif
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize">{{ $car->namaBarang }}</h4>
                                    <h6>{{ 'Rp. '.$car->harga.' / Day' }}</h6>
                                    <a href="{{ route('detail', $car->id) }}" class="btn btn-warning">Lebih Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
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
