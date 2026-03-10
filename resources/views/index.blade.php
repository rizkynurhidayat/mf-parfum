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
        <div class="search">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </div>

        <!-- <div id="menu" onclick="openMenu()"> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg> -->
        <!-- </div> -->
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

<!-- item Product -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Produk Kami</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Terbaru</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Terlaris</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Termurah</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach($products as $product)
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="product-item">
        <div class="product-img-container">
            <img class="img-fluid" src="{{ asset('storage/'.$product->image) }}" alt="">
            <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
        </div>
        
        <div class="text-center p-4">
            <a class="d-block h5 mb-2 product-title" href="">{{ $product->name }}</a>
            <span class="text-primary me-1">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
        </div>
        
        <div class="product-link-wrapper">
            <a class="product-link border-end" href="">
                <i class="fa fa-eye me-2"></i>Detail
            </a>
            <a class="product-link" href="">
                <i class="fa fa-shopping-bag me-2"></i>Beli
            </a>
        </div>
    </div>
</div>
        
                    @endforeach
                    
                    <div class="col-12 text-center mt-5">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Product End -->


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

<!-- footer -->
    <footer class="footer">
    <div class="footer-container">

    <!-- GRID 4 KOLOM -->
    <ul class="footer-grid">
      <li>
        <div class="f">
          <h3>Layanan pelanggan</h3>
          <ul>
            <li><a href="">Hubungi</a></li>
            <li><a href="">Pengiriman & Pengembalian</a></li>
            <li><a href="">Pertanyaan yang Sering Diajukan (FAQ)</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="f">
          <h3>Temukan Kami</h3>
          <ul>
            <li><a href="">Lokasi Cabang 1</a></li>
            <li><a href="">Lokasi Cabang 2</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="f">
          <h3>Brand Kami</h3>
          <ul>
            <li><a href="">Syarat & Ketentuan Hukum</a></li>
            <li><a href="">Kebijakan Privasi</a></li>
            <li><a href="">Kebijakan Cookie</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="f">
          <h3>Ikuti Kami</h3>
          <div class="aplikasi">
            <a href="https://instagram.com">
                <img src="images/instagram.png" alt="">
            </a>
            <a href="https://tiktok.com/">
                <img src="images/tik-tok.png" alt="">
            </a>
            <a href="https://snapchat.com/">
                <img src="images/twitter.png" alt="">
            </a>
            <a href="https://facebook.com/">
                <img src="images/facebook.png" alt="">
            </a>
            <a href="https://facebook.com/">
                <img src="images/snapchat.png" alt="">
            </a>
          </div>
        </div>
      </li>
    </ul>
    

    <!-- LOGO -->
    <a href="#top" class="logo-mf-footer">
      <img src="images/logo.jpeg" alt="logo" class="img-logof">
    </a>

    <!-- MENU BAWAH -->
    <ul class="footer-bottom">
      <li><a href="">Kebijakan Privasi</a></li>
      <li><a href="">Syarat dan Ketentuan</a></li>
      <li><a href="">Kebijakan Cookie</a></li>
    </ul>

  </div>
</footer>
<!-- footer end -->
    
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Template Javascript -->
    <script src="js/main.js"></script>
           <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('foody2')}}/lib/wow/wow.min.js"></script>
    <script src="{{ asset ('foody2')}}/lib/easing/easing.min.js"></script>
    <script src="{{ asset ('foody2')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset ('foody2')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    </script>

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