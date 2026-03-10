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
</head>

<body>
    <!-- navbar -->
    <nav>
        <img class="img-nav" src="images/logo.jpeg" width="30px" height="30px" alt="">
        <ul class="ul-nav">
            <li>
                <a href="#Beranda">Beranda</a>
            </li>
            <li>
                <a href="#Produk">Produk</a>
            </li>
            <li>
                <a href="#Tentang">Galeri</a>
            </li>
            <li>
                <a href="#Mitra">Mitra</a>
            </li>
        </ul>
        {{-- <div class="search">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </div> --}}

        <!-- <div id="menu" onclick="openMenu()"> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg> -->
        <!-- </div> -->

        <div class="search" id="search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </div>

{{-- <div id="search-overlay" class="search-overlay">
    <div class="search-card">
        <div class="search-header">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            <input type="text" placeholder="Cari di sini..." id="search-input">
            <div id="close-search" class="close-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </div>
        </div>
        <div class="search-body">
            <h3>Paling Populer Saat Ini</h3>
            </div>
    </div>
</div> --}}

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
    </nav>

    <div class="mobile-nav">
        <div id="back" onclick="closeMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </div>
        

    <!-- <ul> -->
        <!-- <div id="back" onclick="closeMenu()"> -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg> -->
        <!-- </div> -->
        
        <!-- <li>
            <a href="#Beranda">Beranda</a>
        </li>
        <li>
            <a href="#Tentang">Tentang</a>
        </li>
        <li>
            <a href="#Produk">Produk</a>
        </li>
        <li>
            <a href="#Galeri">Galeri</a>
        </li>
    </ul>
    </div> -->
    
    <!-- navbar end -->

<!-- hero section -->

<!-- Slider main container -->
<section id="Beranda">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($heros as $hero)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $hero->image) }}" alt="Hero Banner">
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> 
</section>
<!-- hero section end -->

<!-- items -->
<section id="Produk">
    <div class="item-section">
        <h1>Produk Kami</h1>

        <div class="kategori">
        <button data-kategori="terlaris">Terlaris</button>
        <button data-kategori="termurah">Termurah</button>
        <button data-kategori="terbaru">Terbaru</button>
        </div>

        <ul class="item-box">
            <li>
                <div class="box1 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/farish parfum.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
            <li>
                <div class="box2 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/rose parfume.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
            <li>
                <div class="box3 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/na slavina parfum.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
            <li>
                <div class="box4 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/skanda parfum.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
            <li>
                <div class="box5 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/syakura parfum.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
            <li>
                <div class="box6 cembung">
                    <div class="box-atas">
                        <h2>Nama Produk</h2>
                        <p>75 ml</p>
                        <!-- <button class="info-button">i</button> -->
                    </div>
                    <div><img class="product-img" src="images/blossom parfum.png"></div>
                    <div class="box-bawah">
                        <h2>IDR 50.000</h2>
                        <button
                         class="buy-button"
                         onclick="window.open('https://shopee.co.id', '_blank')"
                        >
                         BELI
                        </button>
                        
                        <!-- <button class="buy-button">BELI</button> -->
                        <!-- <a href="https://shopee.co.id" class="buy-button" target="_blank">BELI</a> -->
                    </div>
                </div>
            </li>
        </ul>
        <div class="button-lihat">
            <button class="button-box">Lihat Semua</button>
        </div>
    </div>

</section>
<!-- Item Section END -->

<!-- tentang kami -->
    <section id="Tentang">
        <div class="tentang">
            <h1>Tentang Kami</h1>
        </div>
    </section>
    
<section class="mini-swiper-section">
  <div class="swiper mini-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/foto.jpeg"></div>
      <div class="swiper-slide"><img src="images/fotoo.png"></div>
      <div class="swiper-slide"><img src="images/fotooo.jpeg"></div>
    </div>
  </div>
</section>

<!-- tentang kami end -->


<footer class="custom-footer">
    <div class="footer-container">
        <div class="footer-col">
            <div class="footer-logo">
                <img src="img/logo-mf.png" alt="MF Parfum Logo">
                <h2>MF Parfum</h2>
            </div>
            <p>Aroma elegan untuk setiap momen berharga Anda. Temukan jati dirimu melalui wewangian eksklusif kami.</p>
            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="footer-col">
            <h4>Address</h4>
            <div class="contact-item">
                <i class="fa fa-map-marker-alt"></i>
                <span>123 Street, New York, USA</span>
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

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
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
    
    <!-- CTA Customer Service -->
    <!-- <a href="https://web.whatsapp.com/" class="cs-service" target="_blank">
    <img src="cs1.png" alt="Customer Service">
    </a> -->

    <a href="https://web.whatsapp.com/" class="cs-service" target="_blank">
    <!-- <img src="cs1.png" alt="Customer Service"> -->
        <!-- <i class="fa-chisel fa-regular fa-comment"></i> -->
        <!-- <i class="fa-etch fa-solid fa-comment"></i> -->
    <img src="images/chat5.png" alt="Customer Service">
        
    </a>

    <script src="main.js"></script>
    @vite(['resources/js/app.js', 'resources/js/main.js'])
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
</body> </html>
</body>
</html>