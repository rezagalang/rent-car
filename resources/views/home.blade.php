@extends('layouts.front')

@section('title', 'Home')
@section('content')
    <section class="secthero" id="hero">
        <header class="header">
            <div class="container">
                <img src="{{ asset('img/logo.png') }}" alt="">
                <ul class="mainmenu">
                    <li><a href="{{ route('home') }}" class="{{ Route::has('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('sewa') }}">Sewa Mobil</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="titlehero">
                <h1>RentCar solusi rental mobil untuk perjalananmu</h1>
                <p>Sewa mobil dapat menjadi solusi terbaik bagi Anda jika Anda membutuhkan kendaraan untuk jarak jauh atau
                    untuk keperluan bisnis dan tidak ingin memiliki kendaraan tetap.</p>
                <button type="button" class="btn btn-warning">Hubungi Kami</button>
            </div>
        </div>
    </section>
    <div class="divider">
        <ul>
            <li><i class="fa fa-check"></i>&ensp;Harga Terjangkau Dan Pilihan Unit Banyak</li>
            <li><i class="fa fa-check"></i>&ensp;Mobil Yang Sudah Pasti Sangat Nyaman Dan Terawat</li>
            <li><i class="fa fa-check"></i>&ensp;Unit Mobil Yang Selalu Baru Tidak Lebih Dari 5 Tahun</li>
        </ul>
    </div>
    <section class="sectabout">
        <div class="container">
            <div class="aboutus">
                <div class="titleabout">
                    <h2>Sekilas Tentang Kami</h2>
                    <p>RentCar adalah salah satu agen rental mobil. Kami memiliki berbagai macam kendaraan yang siap
                        digunakan untuk perjalanan jauh maupun dekat. Seluruh armada kami selalu mendapatkan pengecekan dan
                        perawatan secara rutin sehingga dipastikan semua kendaraan kami dalam keadaan baik saat disewa.</p>
                    <button type="button" class="btn btn-warning">Selengkapnya</button>
                </div>
                <div class="picabout">
                    <img src="{{ asset('img/happy.jpg') }}">
                </div>
            </div>
        </div>
    </section>
    <section class="sectreason">
        <h2>Alasan memilih kami</h2>
        <div class="shortdivider" id="orange"></div>
        <div class="container py-3">
            <div class="row row2 mt-4">
                <div class="col-lg-3 mb-lg-0 mb-4 mt-4">
                    <div class="card z-index-2 h-100 card-car">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <div class="caricon">
                                <img src="{{ asset('img/car.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h4 class="text-capitalize">Mobil Lengkap</h4>
                            <p>Memiliki berbagai jenis Varian Dimulai dari yang terendah dan tertinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-lg-0 mb-4 mt-4">
                    <div class="card z-index-2 h-100 card-coin">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <div class="coinicon">
                                <img src="{{ asset('img/coin.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h4 class="text-capitalize">Harga Terjangkau</h4>
                            <p>Kami memberikan ketentuan harga yang terjangkau dan pastinya tetap memberikan pelayanan yang terbaik untuk perjalanan anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-lg-0 mb-4 mt-4">
                    <div class="card z-index-2 h-100 card-driver">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <div class="drivericon">
                                <img src="{{ asset('img/driver.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h4 class="text-capitalize">Driver Profesional</h4>
                            <p>Dengan driver yang profesional dalam mengantarkan anda ke tempat tujuan maka kami memberikan pelayanan driver yang ramah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-lg-0 mb-4 mt-4">
                    <div class="card z-index-2 h-100 card-reservasi">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <div class="reservasiicon">
                                <img src="{{ asset('img/reservasi.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h4 class="text-capitalize">Reservasi Online</h4>
                            <p>Kami selalu siap melayani anda kapanpun dalam waktu kapan saja untuk memenuhi permintaan rental yang dibutuhkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectcar">
        <div class="container">
            <h2>Daftar Harga Sewa Mobil</h2>
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
    <section class="secthub">
        <div class="container" id="hub">
            <div class="titlehub">
                <h3>Belum Menemukan Unit yang Diinginkan ?</h3>
                <p>Silakan hubungi kami untuk informasi lebih lengkap terkait pilihan kendaraan yang kami tawarkan.</p>
                <button class="btn btn-success d-flex"><i class="fa fa-2x fa-whatsapp"></i><p>&ensp;Hubungi Kami</p></button>
            </div>
            <div class="pichub">
                <img src="{{ asset('img/cars1.png') }}" style="width: 120%">
            </div>
        </div>
    </section>
    <section class="secttesti">
        <div class="container">
            <h2>Testimoni Pelanggan</h2>
            <div class="shortdivider"></div>
            <div class="container-fluid py-4">
                <div class="row mt-4">
                    <div class="col-lg-4 mb-lg-0 mb-4 mt-4">
                        <div class="card z-index-2 h-100 card-testi">
                            <div class="card-header pb-0 pt-3 bg-transparent">
                                <img src="{{ asset('img/testi.png') }}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <h4 class="text-capitalize">David Druid</h4>
                                <h6>Wirausaha</h6>
                                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-lg-0 mb-4 mt-4">
                        <div class="card z-index-2 h-100 card-testi">
                            <div class="card-header pb-0 pt-3 bg-transparent">
                                <img src="{{ asset('img/testi.png') }}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <h4 class="text-capitalize">David Druid</h4>
                                <h6>Wirausaha</h6>
                                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-lg-0 mb-4 mt-4">
                        <div class="card z-index-2 h-100 card-testi">
                            <div class="card-header pb-0 pt-3 bg-transparent">
                                <img src="{{ asset('img/testi.png') }}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <h4 class="text-capitalize">David Druid</h4>
                                <h6>Wirausaha</h6>
                                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
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
