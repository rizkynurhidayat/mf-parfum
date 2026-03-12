
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MF Parfum</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset ('foody2')}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    
    <style>
        /* Tambahan sedikit biar navbar kamu tidak menutupi konten */
        body { padding-top: 80px; } 
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset ('foody2')}}/lib/wow/wow.min.js"></script>

</head>

<body>
    <nav>
        <img class="img-nav" src="images/logo.jpeg" width="30px" height="30px" alt="Logo">
        <ul class="ul-nav">
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('home') }}#Produk">Produk</a></li>
            <li><a href="{{ route('home') }}#Tentang">Galeri</a></li>
            <li><a href="{{ route('home') }}#Mitra">Mitra</a></li>
        </ul>
        <div class="nav-actions">
    <div class="search" id="search-btn">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
            <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
        </svg>
    </div>

    <div class="hamburger" id="hamburger-btn" onclick="openMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#1f1f1f">
            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
        </svg>
    </div>
</div>
    </nav>

    <div class="mobile-nav" id="mobile-nav">
    <div id="back" onclick="closeMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
    </div>
    <ul class="mobile-menu-list">
        <li><a href="{{ route('home') }}#Beranda" onclick="closeMenu()">Beranda</a></li>
        <li><a href="{{ route('home') }}#Produk" onclick="closeMenu()">Produk</a></li>
        <li><a href="{{ route('home') }}#Tentang" onclick="closeMenu()">Galeri</a></li>
        <li><a href="{{ route('home') }}#Mitra" onclick="closeMenu()">Mitra</a></li>
    </ul>
</div>



    
    <div id="search-overlay" class="search-overlay">
    <div class="search-card">
        <div class="search-header">
            <div class="search-input-group">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                <input type="text" placeholder="Cari di sini..." id="search-input">
            </div>
            <div id="close-search" class="close-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </div>
        </div>
        <div class="search-body">
            <h3>Paling Populer Saat Ini</h3>
            <div class="popular-list">
                <span>Parfum Rose</span>
                <span>Best Seller</span>
                <span>Koleksi Baru</span>
            </div>
        </div>
    </div>
</div>



   <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->




    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('images/aboutt.jpeg') }}" style="border-radius: 20px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Wewangian Terbaik & Eksklusif</h1>
                    <p class="mb-4">MF Parfum hadir untuk memberikan aroma mewah yang mampu meningkatkan kepercayaan diri Anda. Kami menggunakan bahan pilihan yang diracik khusus agar tahan lama dan nyaman digunakan sepanjang hari.</p>
                    <p><i class="fa fa-check me-3" style="color: #C2185B;"></i>Premium</p>
                    <p><i class="fa fa-check me-3" style="color: #C2185B;"></i>Tahan Lama Hingga 12 Jam</p>
                    <p><i class="fa fa-check me-3" style="color: #C2185B;"></i>Aman di Kulit dan Pakaian</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('home') }}#Produk">Lihat Koleksi</a>
                </div>

                <!-- Firm Visit Start -->
    <!-- <div class="container-fluid bg-icon mt-5 py-6"> -->
    <div class="container-fluid mt-5 py-6" style="background-color: #ffb8b8;">
        <div class="container">
            <div class="row g-5 justify-content-center text-center">
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.1s">
                     <h1 class="display-5 text-white mb-5">Membangun Bisnis Bersama MF Parfum</h1>
        
                    <p class="text-white mb-0" style="font-size: 1.1rem; line-height: 1.8;">
                    Bergabunglah menjadi bagian dari jaringan mitra kami dan hadirkan produk wewangian premium dengan kualitas terbaik kepada pelanggan Anda. 
                    Kami menyediakan dukungan penuh bagi para mitra untuk tumbuh bersama melalui produk yang sudah teruji dan diminati pasar.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->

            </div>
        </div>
    </div>

    <footer class="custom-footer">
        <div class="footer-container">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="img/logo-mf.png" alt="MF Parfum Logo">
                    <h2>MF Parfum</h2>
                </div>
                <p>Aroma elegan untuk setiap momen berharga Anda.</p>
                <div class="social-links">
                    <a href="{{ $information->twitter }}" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $information->tiktok }}" target="_blank" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{{ $information->instagram }}" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Address</h4>
                <div class="contact-item">
                <a href="{{ $information->location }}" target="_blank">

                    <i class="fa fa-map-marker-alt" style="color:white;"></i>
                    <span>123 Street, New York, USA</span>
                </a>
                </div>
                <div class="contact-item">
                    <i class="fa fa-phone-alt"></i>
                    <span>{{ $information->phone ?? '+012 345 67890' }}</span>
                </div>
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <span>{{ $information->email ?? 'info@example.com' }}</span>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <!-- <li><a href="{{ route('home') }}">Beranda</a></li> -->
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Terms & Condition</a></li>

                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MF Parfum. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="main.js"></script>

<script>
    // 1. Fungsi Mobile Menu
    function openMenu() {
        const nav = document.getElementById("mobile-nav");
        if(nav) nav.style.display = "block";
    }

    function closeMenu() {
        const nav = document.getElementById("mobile-nav");
        if(nav) nav.style.display = "none";
    }

    // 2. Fungsi Search & Animasi
    $(document).ready(function() {
        // Buka Search
        $('#search-btn').on('click', function(e) {
            e.preventDefault();
            $('#search-overlay').addClass('active');
        });

        // Tutup Search
        $('#close-search').on('click', function() {
            $('#search-overlay').removeClass('active');
        });

        // Jalankan animasi WOW.js
        if (typeof WOW !== 'undefined') {
            new WOW().init();
        }
    });
</script>
</body>
</html>