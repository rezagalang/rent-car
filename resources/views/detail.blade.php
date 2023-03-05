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
                            <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->jenisMobil }}">
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <div class="merk">
                        <h2>{{ $car->jenisMobil }}</h2>
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
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalsewa">Sewa Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalsewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                    <form action="{{ route('send.email') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-6 m-0">
                                    <h6>Data Diri</h6>
                                    <hr class="mb-2">
                                    <label for="nama" class="form-control-label">Nama</label>
                                    <input type="text" class="form-control mb-0 @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Anda..." value="{{ old('nama') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <h6>Data Mobil</h6>
                                    <hr class="mb-2">
                                    <label class="form-control-label">Jenis Mobil</label>
                                    <input type="text" class="form-control" name="jenisMobil" value="{{ $car->jenisMobil }}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Anda..." value="{{ old('email') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{ $car->harga }}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="noTelp" class="form-control-label">No. Telepon</label>
                                    <input type="text" class="form-control @error('noTelp') is-invalid @enderror" id="noTelp" name="noTelp" placeholder="Masukkan No. Telepon..." value="{{ old('noTelp') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Tempat Duduk</label>
                                    <input type="text" class="form-control" name="tempatDuduk" value="{{ $car->tempatDuduk }}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="alamat" class="form-control-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda..." value="{{ old('alamat') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Transmisi</label>
                                    <input type="text" class="form-control" name="transmisi" value="{{ $car->transmisi }}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tglSewa" class="form-control-label">Tanggal Sewa</label>
                                    <input type="date" class="form-control @error('tglSewa') is-invalid @enderror" id="tglSewa" name="tglSewa" value="{{ old('tglSewa') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Bahan Bakar</label>
                                    <input type="text" class="form-control" name="bahanBakar" value="{{ $car->bahanBakar }}" readonly>
                                </div>
                                <input type="hidden" class="form-control" id="car_id" name="car_id" value="{{ $car->id }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-warning">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->

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
                                            <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->jenisMobil }}" class="img-fluid">
                                        </div>
                                    @endif
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize">{{ $car->jenisMobil }}</h4>
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
