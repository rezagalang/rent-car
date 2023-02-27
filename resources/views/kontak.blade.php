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
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}" class="{{ Route::has('kontak') ? 'active' : '' }}">Kontak</a></li>
                </ul>
            </div>
        </header>
    </section>
    <section class="sectabout">
        <div class="container">
            <div class="aboutus">
                <div class="titleabout">
                    <h2>Tentang Kami</h2>
                    <div class="col-lg-12 mb-lg-0 mb-4 mt-4 visimisi">
                        <div class="card z-index-2 h-100 card-visimisi">
                            <div class="header-visimisi">
                                <h5>Alamat</h5>
                            </div>
                            <div class="card-body p-4">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-lg-0 mb-4 mt-4">
                        <div class="card z-index-2 h-100 card-visimisi">
                            <div class="header-visimisi">
                                <h5>Whatsapp</h5>
                            </div>
                            <div class="card-body p-4">
                                <p>0895 -3659-3000-16</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-lg-0 mb-4 mt-4">
                        <div class="card z-index-2 h-100 card-visimisi">
                            <div class="header-visimisi">
                                <h5>Email</h5>
                            </div>
                            <div class="card-body p-4">
                                <p>Rentcar01@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('img/map.png') }}">
            </div>
        </div>
    </section>
    <section class="pesan">
        <div class="container">
            <div class="titleabout" id="kirim">
                <h2>Kirimi kami Pesan</h2>
            </div>
            <div class="form-pesan">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="email" id="email" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-dark send">Send</button>
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
