@extends('frontend.layouts.app')
@section('title', 'Tentang Kami - NexPark')
@push('styles')
    @include('frontend.layouts.navbar-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .hero-wrap-2 {
            margin-bottom: 6rem;
            position: relative;
            border-bottom: 5px solid #01d28e;
        }

        .hero-wrap-2::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom right, transparent 49%, #f8f9fa 50%);
        }

        .hero-wrap-2 h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-wrap-2 p,
        .hero-wrap-2 a {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .ftco-about {
            padding: 6em 0;
            background: #01d28e;
        }

        .about-content {
            background: #fff;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid rgba(1, 210, 142, 0.1);
            transition: all 0.3s ease;
        }

        .about-content h2 {
            font-size: 1.7rem;
            font-weight: 900;
            color: #333;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            font-weight: 500;
            color: #444;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title .subheading {
            color: #01d28e;
            font-size: 2rem;
            font-weight: 900;
            display: inline-block;
            padding: 0.5rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 900;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            width: 100px;
            height: 3px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
        }

        .features-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .feature-box {
            flex: 1 1 220px;
            max-width: 260px;
            min-width: 200px;
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(1, 210, 142, 0.1);
            box-sizing: border-box;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: #01d28e;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(1, 210, 142, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon {
            background: #01d28e;
        }

        .feature-icon i {
            font-size: 24px;
            color: #01d28e;
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon i {
            color: white;
        }

        .feature-text {
            flex: 1;
        }

        .feature-text h3 {
            font-size: 1.1rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .feature-text p {
            font-size: 1rem;
            color: #555;
            margin: 0;
            line-height: 1.5;
            font-weight: 500;
        }

        .about-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            border: 3px solid #fff;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .features-container {
                gap: 1rem;
            }

            .feature-box {
                max-width: 100%;
                min-width: 160px;
            }
        }

        @media (max-width: 768px) {
            .features-container {
                flex-direction: column;
                align-items: center;
            }

            .feature-box {
                width: 100%;
                max-width: 400px;
            }
        }

        .about-content .about-badge {
            display: inline-block;
            background: #fff;
            color: #01d28e;
            font-size: 2rem;
            font-weight: 900;
            padding: 0.5rem 2.5rem;
            border-radius: 2.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .about-content .about-title {
            color: #01d28e;
            font-size: 2.3rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.13);
        }

        .about-content .about-subtitle {
            color: #333;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.2rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-content p.mb-4 {
            margin-bottom: 2rem !important;
        }

        .about-content .about-welcome {
            display: inline-block;
            background: rgba(255, 255, 255, 0.92);
            color: #333;
            font-size: 1.25rem;
            font-weight: 500;
            max-width: 900px;
            margin: 0 auto 2.2rem auto;
            padding: 1.7rem 2.2rem;
            border-radius: 18px;
            box-shadow: 0 4px 18px rgba(1, 210, 142, 0.07);
            line-height: 2.1;
            text-align: center;
        }

        .about-content .about-why-title {
            font-size: 1.7rem;
            font-weight: 900;
            color: #01d28e;
            margin-bottom: 2.2rem;
            margin-top: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
@endpush
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('frontend/images/bg1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 text-center">
                    <div class="about-image d-inline-block">
                        <img src="frontend/images/bg2.jpg" alt="About NexPark" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="about-content text-center">
                        <span class="about-badge">NEXPARK</span>
                        <div class="about-title">Solusi Parkir Pintar untuk Masa Depan</div>
                        <p class="about-welcome">Selamat datang di NexPark, solusi parkir masa kini yang siap memudahkan
                            hidup Anda! Kami menghadirkan sistem parkir pintar berbasis teknologi canggih, sehingga Anda
                            dapat menikmati pengalaman parkir yang lebih cepat, aman, dan nyaman. Dengan NexPark, parkir
                            bukan lagi masalah, semua jadi lebih praktis, efisien, dan menyenangkan untuk setiap pengguna.
                        </p>
                        <div class="about-why-title">Mengapa Harus Memilih NexPark?</div>
                        <div class="features-container justify-content-center">
                            <div class="feature-box text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Keamanan Terjamin</h3>
                                    <p>Sistem pengawasan 24/7 dengan teknologi canggih</p>
                                </div>
                            </div>
                            <div class="feature-box text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Pembayaran Digital</h3>
                                    <p>Transaksi cepat dan aman</p>
                                </div>
                            </div>
                            <div class="feature-box text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Lokasi Strategis</h3>
                                    <p>Tersebar di pusat-pusat kota</p>
                                </div>
                            </div>
                            <div class="feature-box text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Dukungan 24/7</h3>
                                    <p>Tim profesional siap membantu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection