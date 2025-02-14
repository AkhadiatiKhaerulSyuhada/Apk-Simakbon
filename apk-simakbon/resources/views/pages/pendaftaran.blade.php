@extends('layouts.main')

@section('content')

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

@endsection