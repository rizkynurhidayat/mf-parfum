<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Condition - MF Parfum</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('foody2') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('foody2') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="{{ asset('foody2') }}/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <img class="img-nav" src="images/logo.jpeg" width="30px" height="30px" alt="Logo">
        
        <ul class="ul-nav">
            <li><a href="{{ url('/') }}#Beranda">Beranda</a></li>
            <li><a href="{{ url('/') }}#Produk">Produk</a></li>
            <li><a href="{{ url('/') }}#Tentang">Galeri</a></li>
            <li><a href="{{ url('/') }}#Mitra">Mitra</a></li>
        </ul>

        <div class="nav-actions">
            <div class="search" id="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            </div>
            <div class="hamburger" id="hamburger-btn" onclick="openMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#1f1f1f"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </div>
        </div>
    </nav>

    <div class="mobile-nav" id="mobile-nav">
        <div id="back" onclick="closeMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </div>
        
        <ul class="mobile-menu-list">
            <li><a href="{{ url('/') }}#Beranda" onclick="closeMenu()">Beranda</a></li>
            <li><a href="{{ url('/') }}#Produk" onclick="closeMenu()">Produk</a></li>
            <li><a href="{{ url('/') }}#Tentang" onclick="closeMenu()">Galeri</a></li>
            <li><a href="{{ url('/') }}#Footer" onclick="closeMenu()">Tentang</a></li>
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
    <div class="container-xxl py-5" style="margin-top: 80px; min-height: 70vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tnc-card">
                        <div class="section-header text-center mb-5">
                            <h1 class="display-5 mb-3" style="color: #C2185B;">Syarat & Ketentuan</h1>
                            <p>Pembaruan Terakhir: 13 Maret 2026</p>
                        </div>

                        <div class="tnc-content">
                            <h4>1. Pendahuluan</h4>
                            <p>Selamat datang di MF Parfum. Dengan mengakses dan menggunakan layanan pada website kami, Anda dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat dan Ketentuan ini. Jika Anda tidak menyetujui syarat ini, mohon untuk tidak menggunakan layanan kami.</p>

                            <h4>2. Informasi Produk & Harga</h4>
                            <p>Kami berusaha untuk menampilkan deskripsi wewangian, gambar, dan harga seakurat mungkin. Namun, warna gambar mungkin sedikit berbeda tergantung layar perangkat Anda. MF Parfum berhak mengubah harga produk kapan saja tanpa pemberitahuan sebelumnya.</p>

                            <h4>3. Pemesanan dan Pembayaran</h4>
                            <p>Semua pesanan yang masuk tunduk pada ketersediaan stok. Kami akan mengonfirmasi pesanan Anda melalui sistem kami. Pembayaran harus dilakukan penuh sebelum produk dikirimkan. Kami hanya memproses pesanan dengan bukti pembayaran yang sah.</p>

                            <h4>4. Pengiriman</h4>
                            <p>Waktu pengiriman bervariasi tergantung lokasi tujuan dan jasa ekspedisi yang dipilih. Kami tidak bertanggung jawab atas keterlambatan pengiriman yang disebabkan oleh pihak ketiga (jasa ekspedisi), cuaca, atau kondisi tak terduga lainnya.</p>

                            <h4>5. Kebijakan Pengembalian (Return)</h4>
                            <p>Produk yang sudah dibeli tidak dapat ditukar atau dikembalikan, kecuali jika barang yang Anda terima dalam keadaan rusak, bocor, atau tidak sesuai pesanan. Klaim kerusakan harus dilakukan maksimal 2x24 jam setelah barang diterima dengan menyertakan video unboxing.</p>

                            <h4>6. Hak Kekayaan Intelektual</h4>
                            <p>Semua konten di situs ini, termasuk namun tidak terbatas pada logo MF Parfum, gambar produk, teks, dan desain visual, adalah milik sah MF Parfum dan dilindungi oleh undang-undang hak cipta.</p>

                            <h4>7. Hubungi Kami</h4>
                            <p>Jika Anda memiliki pertanyaan mengenai Syarat & Ketentuan ini, silakan hubungi kami melalui halaman Contact Us atau langsung melalui layanan Customer Service WhatsApp kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="Footer" class="custom-footer">
    <div class="footer-container">
        <div class="footer-col wow fadeInUp" data-wow-delay="0.1s">
            <div class="footer-logo">
                <h2>MF Parfum</h2>
            </div>
            <p>Aroma elegan untuk setiap momen berharga Anda. Temukan jati dirimu melalui wewangian eksklusif kami.</p>
            <div class="social-links">
                <a href="{{ $information->twitter }}" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="{{ $information->tiktok }}" target="_blank" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $information->instagram }}" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="footer-col wow fadeInUp" data-wow-delay="0.3s">
            <h4>Address</h4>
            <div class="contact-item">
                <a href="{{ $information->location }}" target="_blank">

                    <i class="fa fa-map-marker-alt" style="color:white;"></i>
                    <span>123 Street, New York, USA</span>
                </a>
            </div>
            <div class="contact-item">
                <i class="fa fa-phone-alt"></i>
                <span>+012 345 67890</span>
            </div>
            <div class="contact-item">
                <i class="fa fa-envelope"></i>
                <span>info@example.com</span>
            </div>
        </div>

        <div class="footer-col wow fadeInUp" data-wow-delay="0.5s">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom wow fadeIn" data-wow-delay="0.8s">
        <p>&copy; 2026 MF Parfum. All Rights Reserved.</p>
    </div>
</footer>
    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $information->phone ?? '0') }}?text=Halo%20MF%20Parfum,%20saya%20ingin%20tanya%20mengenai%20produk%20dan%20kemitraan." 
       class="cs-service" 
       target="_blank" 
       style="position: fixed; bottom: 30px; right: 30px; z-index: 999;">
        <img src="images/chat5.png" alt="Customer Service" style="width: 50px; height: 50px;">
    </a>

    <script src="main.js"></script>
    @vite(['resources/js/app.js', 'resources/js/main.js'])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('foody2') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('foody2') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('foody2') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('foody2') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    
</body>

<script>
            $(document).ready(function() {
            if (typeof WOW !== 'undefined') { new WOW().init(); }
        });
</script>
</html>