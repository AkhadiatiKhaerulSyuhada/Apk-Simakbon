@extends('layouts.main')

@section('content')

<main class="main">

<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h1>Selamat Datang Di Sistem Informasi Manajemen Kontes Bonsai</h1>
                <p> Sistem ini dirancang untuk memudahkan pengelolaan kontes bonsai, mulai dari pendaftaran pendaftaran
                    hingga penjurian dan pengumuman pemenang</p>
                <div class="d-flex">
                    <a href="about" class="btn-get-started">Selanjutnya</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{asset('assets')}}/img/background.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>



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



<section id="upcoming" class="upcoming section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Upcoming Kontes</span>
        <h2>Upcoming Kontes</h2>
    </div>

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="upcoming-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-kontes-lokal">Kontes Lokal</li>
                <li data-filter=".filter-kontes-nasional">Kontes Nasional</li>
            </ul>

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-a os-delay="200">

                <div class="col-lg-4 col-md-6 upcoming-item isotope-item filter-kontes-lokal">
                    <img src="{{asset('assets')}}/img/upcoming/kontesl1.png" class="img-fluid" alt="">
                    <div class="upcoming-info">
                        <h4>Kontes Lokal 1</h4>
                        <p><strong>Nama Kontes:</strong> Mruning Mruntus Maning</p>
                        <p><strong>Tanggal:</strong> </p>
                        <p><strong>Lokasi:</strong> Brebes</p>
                        <a href="{{asset('assets')}}/img/upcoming/kontesl1.png" title="Kontes Lokal Brebes Mruning Mruntus Maning"
                            data-gallery="upcoming-gallery-kontes-lokal" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="{{ route('detail') }}" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 upcoming-item isotope-item filter-kontes-lokal">
                    <img src="{{asset('assets')}}/img/upcoming/kontesl2.png" class="img-fluid" alt="">
                    <div class="upcoming-info">
                        <h4>Kontes Lokal 2</h4>
                        <p><strong>Nama Kontes:</strong> Nggelar Bonsai Bareng</p>
                        <p><strong>Tanggal:</strong> </p>
                        <p><strong>Lokasi:</strong> Kabupaten Tegal</p>
                        <a href="{{asset('assets')}}/img/upcoming/kontesl2.png" title="Kontes Lokal 2"
                            data-gallery="upcoming-gallery-kontes-lokal" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="upcoming-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 upcoming-item isotope-item filter-kontes-nasional">
                    <img src="{{asset('assets')}}/img/upcoming/kontesn1.png" class="img-fluid" alt="">
                    <div class="upcoming-info">
                        <h4>Kontes Nasional</h4>
                        <p><strong>Nama Kontes:</strong> Bonsai Tegal Moncer Maning</p>
                        <p><strong>Tanggal:</strong> </p>
                        <p><strong>Lokasi:</strong> Tegal</p>
                        <a href="{{asset('assets')}}/img/upcoming/kontesn1.png" title="Kontes Nasional Bonsai Tegal Moncer Maning"
                            data-gallery="upcoming-gallery-kontes-nasional" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="upcoming-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container section-title" data-aos="fade-up">
    <span>Form Pendaftaran</span>
    <h2>Pendaftaran Kontes</h2>
    <p>Silakan isi formulir di bawah ini untuk mendaftarkan diri dan bonsai Anda dalam kontes.</p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
        <div class="col-lg-7 mx-auto">

            <!-- Pesan Sukses -->
            @if(session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('daftar') }}" method="POST" enctype="multipart/form-data" data-aos="fade-up"
                data-aos-delay="200">
                @csrf

                <div class="row gy-4">

                    <div class="col-md-6">
                        <label for="name-field" class="pb-2">Nama Lengkap</label>
                        <input type="text" name="name" id="name-field" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email-field" class="pb-2">Email</label>
                        <input type="email" class="form-control" name="email" id="email-field" required>
                    </div>

                    <div class="col-md-6">
                        <label for="phone-field" class="pb-2">Nomor Telepon</label>
                        <input type="tel" class="form-control" name="phone" id="phone-field" required>
                    </div>

                    <div class="col-md-6">
                        <label for="alamat-field" class="pb-2">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat-field" required>
                    </div>

                    <div class="col-md-6">
                        <label for="category-field" class="pb-2">Kategori Bonsai</label>
                        <select class="form-control" name="category" id="category-field" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="juniper">Juniper</option>
                            <option value="ficus">Ficus</option>
                            <option value="Wrightia">Wrightia</option>
                            <option value="Premna">Premna</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="kelas-field" class="pb-2">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas-field" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="pratama">Prospek</option>
                            <option value="regional">Regional</option>
                            <option value="madya">Madya</option>
                            <option value="bintang">Utama</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="size-field" class="pb-2">Ukuran</label>
                        <select class="form-control" name="size" id="size-field" required>
                            <option value="" disabled selected>Pilih Ukuran</option>
                            <option value="Mame">Mame</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="Extra Large">Extra Large</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="contest-field" class="pb-2">Pilih Kontes</label>
                        <select class="form-control" name="contest" id="contest-field" required>
                            <option value="" disabled selected>Pilih Kontes</option>
                            <optgroup label="Kontes Lokal">
                                <option value="Kontes Lokal 1">Kontes Lokal 1</option>
                                <option value="Kontes Lokal 2">Kontes Lokal 2</option>
                            </optgroup>
                            <optgroup label="Kontes nasional">
                                <option value="Kontes nasional">Kontes Nasional</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="photo-field" class="pb-2">Upload Foto Bonsai</label>
                        <input type="file" class="form-control" name="bonsai_photo" id="photo-field"
                            accept="image/*" required>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- ulasan Section -->
    <section id="ulasan" class="ulasan section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>ulasan</span>
            <h2>ulasan</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 20
                        }
                    }
                }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="ulasan-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets')}}/img/ulasan/ulasan-1.jpg" class="ulasan-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End ulasan item -->

                    <div class="swiper-slide">
                        <div class="ulasan-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                    culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets')}}/img/ulasan/ulasan-2.jpg" class="ulasan-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End ulasan item -->

                    <div class="swiper-slide">
                        <div class="ulasan-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets')}}/img/ulasan/ulasan-3.jpg" class="ulasan-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End ulasan item -->

                    <div class="swiper-slide">
                        <div class="ulasan-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets')}}/img/ulasan/ulasan-4.jpg" class="ulasan-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End ulasan item -->

                    <div class="swiper-slide">
                        <div class="ulasan-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                    noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                    cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets')}}/img/ulasan/ulasan-5.jpg" class="ulasan-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End ulasan item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- /ulasan Section -->

    
<section id="juri" class="juri section">
    <div class="container section-title" data-aos="fade-up">
        <span>Data Juri</span>
        <h2>Data Juri</h2>
        <p>Berikut adalah beberapa data juri yang akan menilai kontes:</p>
    </div>

    <div class="container">
        <div class="row gy-5">
            @foreach ($juris as $juri)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic">
                            <!-- Sesuaikan ukuran gambar di sini -->
                            <img src="{{ asset('storage/' . $juri->foto) }}" class="img-fluid" alt="{{ $juri->nama }}" style="width: 100%; height: 450px; object-fit: cover;">

                        </div>
                        <div class="member-info">
                            <p><strong>Nama:</strong> {{ $juri->nama }}</p>
                            <p><strong>Umur:</strong> {{ $juri->umur }}</p>
                            <p><strong>Keahlian:</strong> {{ $juri->keahlian }}</p>
                            <p><strong>Pengalaman:</strong> {{ $juri->pengalaman }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



</main>
<footer id="footer" class="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                </div>
            </div>

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="d-flex align-items-center">
                            <span class="sitename">Simakbon</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Jl. Prof Buya Hamka</p>
                            <p>Kota Tegal, Indonesia</p>
                            <p class="mt-3"><strong>Telepon:</strong> <span>+62 838 9899 9105</span></p>
                            <p><strong>Email:</strong> <span>simakbon@gmail.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Link Penting</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://youtu.be/OXjBUED5RHg?si=p-UQ15g9b8ITHnbr" target="_blank">Cara Perawatan Bonsai</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://youtu.be/-Oy4Fg4C1-w?si=K9DmYIcla2PI7cf6" target="_blank">Gerak Dasar Bonsai</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://youtu.be/Sy3MrVGeEos?si=b7ogdvzL3KLYiTJW" target="_blank">Kontes Bonsai Terdahulu</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://youtu.be/rgPzg2ljH_4?si=GOoU2R2mUC1Yfsok" target="_blank">Cara Pruning Bonsai</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Informasi</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> 
                                <a href="https://www.bonsaiempire.com/origin/bonsai-history" target="_blank">Sejarah Bonsai</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> 
                                <a href="https://www.cnnindonesia.com/gaya-hidup/20211015140141-282-708294/15-jenis-tanaman-bonsai-untuk-hiasan-di-rumah" target="_blank">Jenis-Jenis Bonsai</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> 
                                <a href="https://disperkimta.bulelengkab.go.id/informasi/detail/artikel/cara-merawat-tanaman-bonsai-90https://disperkimta.bulelengkab.go.id/informasi/detail/artikel/cara-merawat-tanaman-bonsai-90" target="_blank">Cara Merawat Bonsai</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> 
                                <a href="http://kumparan.com/seputar-hobi/8-manfaat-menanam-bonsai-bagi-kesehatan-fisik-dan-mental-22nk3ltdRpP/2" target="_blank">Manfaat</a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <h4>Ikuti Kami</h4>
                        <p>Ikuti kami di media sosial untuk mendapatkan informasi terkini.</p>
                        <div class="social-links d-flex">
                            <a href="https://github.com/AkhadiatiKhaerulSyuhada" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="https://www.instagram.com/a.kshda_?igsh=N3psM3BwN3h3anAx" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/akhadiati-khaerul-syuhada/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Simakbon</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    Designed by <a>Simakbon</a> Distributed by <a>Akhadiati Khaerul Syuhada
                </div>
            </div>

</footer>
@endsection