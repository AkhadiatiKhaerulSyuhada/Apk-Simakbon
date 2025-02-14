<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Simakbon</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">

    <!-- ✅ Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Simakbon</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="kontes">Kontes</a></li>
                    <li><a href="pendaftaran">Pendaftaran</a></li>
                    <li><a href="juri">Data Juri</a></li>

                    <!-- Cek apakah user sudah login -->
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ Auth::user()->profile_picture ?? asset('assets/img/icon/iconlogin.png') }}"
                                alt="User Image" class="rounded-circle me-2" width="30" height="30">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end text-center"
                            aria-labelledby="userDropdown" style="min-width: 110px; padding: 5px 0;">

                            <!-- Profile -->
                            <a class="dropdown-item d-flex align-items-center justify-content-center"
                              href="/profile"
                              style="height: 30px; padding: 5px 5px; color: rgba(0, 0, 0, 0.6);"
                              onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                              onmouseout="this.style.backgroundColor='transparent'; this.style.color='rgba(0, 0, 0, 0.6)';">
                              <i class="bi bi-person-circle me-1" style="font-size: 14px;"></i><span>Profile</span>
                            </a>

                            <!-- Logout -->
                            <a class="dropdown-item d-flex align-items-center justify-content-center"
                              href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                              style="height: 30px; padding: 5px 5px; color: rgba(0, 0, 0, 0.6);"
                              onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                              onmouseout="this.style.backgroundColor='transparent'; this.style.color='rgba(0, 0, 0, 0.6)';">
                              <i class="bi bi-box-arrow-right me-1" style="font-size: 14px;"></i><span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('assets')}}/vendor/aos/aos.js"></script>
    <script src="{{asset('assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{asset('assets')}}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{asset('assets')}}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets')}}/js/main.js"></script>

    <!-- ✅ Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- ✅ Script Alert Notifikasi -->
    <script>
    function showSuccessToast(message) {
        Toastify({
            text: message,
            duration: 3000, // Durasi 3 detik
            close: true, // Tambahkan tombol close (X)
            gravity: "top", // Bisa "top" atau "bottom"
            position: "right", // Muncul di kanan atas
            style: {
                background: "green", // Warna hijau
                color: "white", // Teks putih
                padding: "10px 20px",
                borderRadius: "8px",
                fontSize: "16px",
                fontWeight: "bold",
            }
        }).showToast();
    }

    // ✅ Cek apakah ada pesan sukses dari Laravel Session
    @if(session('success'))
    showSuccessToast("✅ {{ session('success') }}");
    @endif
    </script>

</body>

</html>