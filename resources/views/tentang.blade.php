@extends('layouts.front')

@section('title', 'Sewa Mobil')
@section('content')
    <section class="sectheader">
        <header class="header" id="header">
            <div class="container">
                <img src="{{ asset('img/logob.png') }}" alt="">
                <ul class="mainmenu" id="mainmenu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sewa') }}">Sewa Mobil</a></li>
                    <li><a href="{{ route('tentang') }}" class="{{ Route::has('tentang') ? 'active' : '' }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </header>
    </section>
    <section class="sectabout">
        <div class="container">
            <div class="aboutus">
                <div class="titleabout">
                    <h2>Tentang Kami</h2>
                    <p>RentCar adalah salah satu agen rental mobil. Kami memiliki berbagai macam 
                        kendaraan yang siap digunakan untuk perjalanan jauh maupun dekat. Seluruh 
                        armada kami selalu mendapatkan pengecekan dan perawatan secara rutin sehingga 
                        dipastikan semua kendaraan kami dalam keadaan baik saat disewa. Persyaratan yang 
                        mudah dan dengan biaya yang murah anda dapat menyewa armada kami untuk keperluan 
                        pribadi maupun rombongan.</p>
                    <button type="button" class="btn btn-warning">Selengkapnya</button>
                </div>
                <div class="pichuman">
                    <img src="{{ asset('img/human.png') }}">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row-2">
                <div class="col-lg-6 mb-lg-0 mb-4 mt-4 visimisi">
                    <div class="card z-index-2 card-visimisi">
                        <div class="header-visimisi">
                            <h2>Visi</h2>
                        </div>
                        <div class="card-body p-4">
                            <p>Perusahaan jasa rental kendaraan yang Pelayanan Terbaik dan profesional sehingga menjadi pilihan utama customer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-lg-0 mb-4 mt-4">
                    <div class="card z-index-2 card-visimisi">
                        <div class="header-visimisi">
                            <h2>Misi</h2>
                        </div>
                        <div class="card-body p-4">
                            <ol>
                                <li> Menjadikan kepuasan setiap customer sebagai prioritas utama kami.</li>
                                <li> Meningkatkan kualitas layanan yang terbaik.</li>
                                <li> Menyediakan unit mobil dengan harga yang  bersahabat dengan jaminan kualitas premium.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="divprom">
        <div class="titleprom" id="car99">
            <h1>99+</h1>
            <h3>Car</h3>
        </div>
        <div class="titleprom">
            <h1>20</h1>
            <h3>Driver</h3>
        </div>
        <div class="titleprom" id="cus100">
            <h1>100+</h1>
            <h3>Customer</h3>
        </div>
    </div>
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
