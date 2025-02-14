@extends('layouts.main')

@section('content')

<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <span>About<br></span>
        <h2>About</h2>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('assets')}}/img/background2.png" class="img-fluid"
                    alt="Sistem Informasi Manajemen Kontes Bonsai">
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Sistem Informasi Manajemen Kontes Bonsai</h3>
                <p class="fst-italic">
                    Sistem ini dirancang untuk memudahkan pengelolaan kontes bonsai, mulai dari pendaftaran pendaftaran
                    hingga penjurian.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> <span>Memfasilitasi pendaftaran pendaftaran secara online
                            dengan alur yang mudah dan cepat.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Menyediakan fitur penilaian digital yang membantu
                            juri memberikan penilaian secara objektif dan transparan.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Mempermudah penyelenggara dalam mengelola data
                            pendaftaran, jadwal kontes, dan hasil penjurian.</span></li>
                </ul>
                <p>
                    Dengan sistem informasi ini, kami berharap dapat meningkatkan efisiensi dan profesionalisme
                    dalam setiap penyelenggaraan kontes bonsai, serta memberikan pengalaman terbaik bagi pendaftaran dan
                    penyelenggara.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection