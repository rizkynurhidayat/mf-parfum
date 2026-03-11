<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfum</title>
    <link rel="stylesheet" href="style.css">

<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset ('foody2')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset ('foody2')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset ('foody2')}}/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
  <!-- ═══════════════════ NAVBAR ═══════════════════ -->
<header class="site-header" id="site-header">
    <nav class="navbar-inner">
        <a href="#Beranda" class="nav-brand">
            <img src="images/logo.jpeg" alt="MF Parfum Logo" class="brand-logo">
            <span class="brand-name">MF Parfum</span>
        </a>

        <ul class="nav-links" id="nav-links">
            <li><a href="#Beranda" class="nav-link-item">Beranda</a></li>
            <li><a href="#Produk" class="nav-link-item">Produk</a></li>
            <li><a href="#Galeri" class="nav-link-item">Galeri</a></li>
            <li><a href="#footer" class="nav-link-item">Kontak</a></li>
        </ul>

        <div class="nav-actions">
            <button class="search-trigger" id="search-btn" aria-label="Cari">
                <i class="fa fa-search"></i>
            </button>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>
</header>

<!-- Search Overlay -->
<div class="search-overlay" id="search-overlay">
    <div class="search-card">
        <div class="search-header">
            <i class="fa fa-search search-icon-inner"></i>
            <input type="text" placeholder="Cari parfum impianmu..." id="search-input" autocomplete="off">
            <button id="close-search" class="close-btn" aria-label="Tutup"><i class="fa fa-times"></i></button>
        </div>
        <div class="search-body">
            <p class="search-label">Paling Dicari</p>
            <div class="popular-tags">
                <span class="tag">Parfum Rose</span>
                <span class="tag">Best Seller</span>
                <span class="tag">Koleksi Baru</span>
                <span class="tag">Oud Elegan</span>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu Overlay -->
<div class="mobile-overlay" id="mobile-overlay"></div>
<div class="mobile-drawer" id="mobile-drawer">
    <button class="drawer-close" id="drawer-close"><i class="fa fa-times"></i></button>
    <nav class="drawer-nav">
        <a href="#Beranda" class="drawer-link">Beranda</a>
        <a href="#Produk" class="drawer-link">Produk</a>
        <a href="#Galeri" class="drawer-link">Galeri</a>
        <a href="#footer" class="drawer-link">Kontak</a>
    </nav>
</div>


<!-- ═══════════════════ HERO ═══════════════════ -->
<section id="Beranda" class="hero-section">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            @foreach($heros as $hero)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $hero->image) }}" alt="MF Parfum Banner">
                    <div class="hero-overlay"></div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- Scroll hint -->
    <div class="scroll-hint">
        <span>Gulir ke bawah</span>
        <div class="scroll-line"></div>
    </div>
</section>


<!-- ═══════════════════ PRODUK ═══════════════════ -->
<section id="Produk" class="section-products">
    <div class="container">

        <!-- Section Header -->
        <div class="section-title-wrap">
            <span class="eyebrow">Koleksi Kami</span>
            <h2 class="section-title">Produk Unggulan</h2>
            <p class="section-subtitle">Temukan wewangian yang mencerminkan kepribadianmu, dibuat dari bahan pilihan berkualitas tinggi.</p>
        </div>

        <!-- Filter Pills -->
        <div class="filter-pills">
            <a href="{{ route('home') }}#Produk"
               class="pill {{ !request('kategori') ? 'pill-active' : '' }}">Semua</a>
            <a href="{{ route('home', ['kategori' => 'terbaru']) }}#Produk"
               class="pill {{ request('kategori') == 'terbaru' ? 'pill-active' : '' }}">Terbaru</a>
            <a href="{{ route('home', ['kategori' => 'terlaris']) }}#Produk"
               class="pill {{ request('kategori') == 'terlaris' ? 'pill-active' : '' }}">Terlaris</a>
            <a href="{{ route('home', ['kategori' => 'termurah']) }}#Produk"
               class="pill {{ request('kategori') == 'termurah' ? 'pill-active' : '' }}">Termurah</a>
        </div>

        <!-- Product Grid -->
        <div class="product-grid">
            @foreach($products as $product)
            <article class="product-card">
                <div class="card-image-wrap">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                    <div class="card-badge">New</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-desc">{{ $product->description }}</p>
                    <div class="card-footer">
                        <span class="card-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="{{ route('product.buy', $product->id) }}" class="btn-buy" target="_blank">
                            <i class="fa fa-bag-shopping"></i> Beli
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-btn">
            <a href="#" class="btn-load-more">Lihat Semua Produk <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>


<!-- ═══════════════════ GALERI ═══════════════════ -->
<section id="Galeri" class="section-gallery">
    <div class="container">
        <div class="section-title-wrap">
            <span class="eyebrow">Momen Bersama Kami</span>
            <h2 class="section-title">Galeri</h2>
        </div>
    </div>

    <div class="swiper gallery-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/foto.jpeg" alt="Gallery 1"></div>
            <div class="swiper-slide"><img src="images/fotoo.png" alt="Gallery 2"></div>
            <div class="swiper-slide"><img src="images/fotooo.jpeg" alt="Gallery 3"></div>
            <div class="swiper-slide"><img src="images/foto.jpeg" alt="Gallery 4"></div>
        </div>
        <div class="swiper-pagination gallery-pagination"></div>
    </div>
</section>


<!-- ═══════════════════ VALUE STRIP ═══════════════════ -->
<section class="value-strip">
    <div class="container">
        <div class="value-grid">
            <div class="value-item">
                <i class="fa fa-leaf"></i>
                <h4>100% Natural</h4>
                <p>Bahan alami pilihan dari seluruh penjuru dunia</p>
            </div>
            <div class="value-item">
                <i class="fa fa-truck"></i>
                <h4>Pengiriman Cepat</h4>
                <p>Sampai dalam 1–3 hari kerja ke seluruh Indonesia</p>
            </div>
            <div class="value-item">
                <i class="fa fa-award"></i>
                <h4>Premium Quality</h4>
                <p>Setiap botol lulus uji kualitas ketat kami</p>
            </div>
            <div class="value-item">
                <i class="fa fa-rotate-left"></i>
                <h4>Garansi Produk</h4>
                <p>Tidak puas? Kami jamin penggantian penuh</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════ FOOTER ═══════════════════ -->
<footer class="site-footer" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand -->
                <div class="footer-col footer-brand-col">
                    <div class="footer-brand">
                        <img src="img/logo-mf.png" alt="MF Parfum" class="footer-logo">
                        <span>MF Parfum</span>
                    </div>
                    <p>Aroma elegan untuk setiap momen berharga Anda. Temukan jati dirimu melalui wewangian eksklusif kami.</p>
                    <div class="social-row">
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Address -->
                <div class="footer-col">
                    <h5>Kontak</h5>
                    <ul class="footer-contact">
                        <li><i class="fa fa-location-dot"></i><span>Jl. Contoh No.123, Jakarta, Indonesia</span></li>
                        <li><i class="fa fa-phone"></i><span>+62 812 3456 7890</span></li>
                        <li><i class="fa fa-envelope"></i><span>hello@mfparfum.id</span></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h5>Navigasi</h5>
                    <ul class="footer-nav-list">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-col">
                    <h5>Newsletter</h5>
                    <p>Dapatkan info koleksi terbaru & promo eksklusif.</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="email@kamu.com">
                        <button type="button"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2024 MF Parfum. Semua Hak Dilindungi.</p>
            <p>Dibuat dengan <i class="fa fa-heart" style="color:#ff8fab"></i> di Indonesia</p>
        </div>
    </div>
</footer>


<!-- ═══════════════════ FLOATING WHATSAPP ═══════════════════ -->
<a href="https://wa.me/6281234567890" class="fab-wa" target="_blank" rel="noopener" aria-label="Hubungi kami di WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>


<!-- ═══════════════════ SCRIPTS ═══════════════════ -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('foody2') }}/lib/wow/wow.min.js"></script>
@vite(['resources/js/app.js'])

<script>
// ── Swiper: Hero ──────────────────────────────────────────
const heroSwiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false },
    effect: 'fade',
    fadeEffect: { crossFade: true },
    speed: 900,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
});

// ── Swiper: Gallery ───────────────────────────────────────
const gallerySwiper = new Swiper('.gallery-swiper', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    slidesPerView: 1.2,
    centeredSlides: true,
    spaceBetween: 20,
    breakpoints: {
        640:  { slidesPerView: 2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 32 },
    },
    pagination: { el: '.gallery-pagination', clickable: true },
});

// ── Navbar Scroll Effect ──────────────────────────────────
const header = document.getElementById('site-header');
window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
});

// ── Search Overlay ────────────────────────────────────────
const searchBtn    = document.getElementById('search-btn');
const searchOverlay = document.getElementById('search-overlay');
const closeSearch  = document.getElementById('close-search');
const searchInput  = document.getElementById('search-input');

searchBtn.addEventListener('click', () => {
    searchOverlay.classList.add('active');
    setTimeout(() => searchInput.focus(), 300);
});
closeSearch.addEventListener('click', () => searchOverlay.classList.remove('active'));
searchOverlay.addEventListener('click', (e) => {
    if (e.target === searchOverlay) searchOverlay.classList.remove('active');
});

// ── Mobile Drawer ─────────────────────────────────────────
const hamburger   = document.getElementById('hamburger');
const drawer      = document.getElementById('mobile-drawer');
const mobileOv    = document.getElementById('mobile-overlay');
const drawerClose = document.getElementById('drawer-close');

function openDrawer()  { drawer.classList.add('open'); mobileOv.classList.add('visible'); hamburger.classList.add('active'); }
function closeDrawer() { drawer.classList.remove('open'); mobileOv.classList.remove('visible'); hamburger.classList.remove('active'); }

hamburger.addEventListener('click', openDrawer);
drawerClose.addEventListener('click', closeDrawer);
mobileOv.addEventListener('click', closeDrawer);
document.querySelectorAll('.drawer-link').forEach(l => l.addEventListener('click', closeDrawer));

// ── Smooth Active Nav Link ────────────────────────────────
const sections = document.querySelectorAll('section[id], footer[id]');
const navItems = document.querySelectorAll('.nav-link-item');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navItems.forEach(n => n.classList.remove('active'));
            const active = document.querySelector(`.nav-link-item[href="#${entry.target.id}"]`);
            if (active) active.classList.add('active');
        }
    });
}, { threshold: 0.35 });
sections.forEach(s => observer.observe(s));

// ── WOW.js ────────────────────────────────────────────────
if (typeof WOW !== 'undefined') new WOW().init();
</script>
</body>
</html>