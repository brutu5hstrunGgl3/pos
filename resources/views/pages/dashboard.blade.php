@extends('layouts.app')

@section('title', 'Universitas Panca Sakti Bekasi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Owl Carousel</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('user.create')}}"> Input Anggota </a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">Owl Carousel</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Koperasi Universitas Panca Sakti Bekasi</h2>
                <p class="section-lead">Melayani , Kooperatif , Dan Kreatif</p>

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Albums</h4>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-theme slider"
                                    id="slider1">
                                    <div><img alt="image"
                                            src="{{ asset('img/news/lulusan.jpg') }}"></div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/img08.jpg') }}"></div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/img10.jpg') }}"></div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/img09.jpg') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-theme slider"
                                    id="slider2">
                                    <div><img alt="image"
                                            src="{{ asset('img/news/profile.jpg') }}">
                                        <div class="slider-caption">

                                            <!-- <div class="slider-title active"><a href =""></a>Image 1</div> -->
                                            <div class="breadcrumb-item active"><a href=""> Kampus Panca Sakti bekasi </a></div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/img08.jpg') }}">
                                        <div class="slider-caption">
                                        <div class="breadcrumb-item active"><a href=""> Kampus Panca Sakti Cikarang </a></div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/profile.jpg') }}">
                                        <div class="slider-caption">
                                            <div class="slider-title">Image 3</div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                    <div><img alt="image"
                                            src="{{ asset('img/news/img09.jpg') }}">
                                        <div class="slider-caption">
                                            <div class="slider-title">Image 4</div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-slider.js') }}"></script>
@endpush
