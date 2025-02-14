@extends('layouts.main')

@section('content')

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

@endsection
