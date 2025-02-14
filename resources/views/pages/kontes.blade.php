@extends('layouts.main')

@section('content')

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
@endsection
