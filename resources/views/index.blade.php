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
     <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="product.html" class="nav-item nav-link active">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

        

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
                </div>
                
                <div class="text-center p-4">
                    <span class="d-block h5 mb-2 product-title" href="">
                        {{ $product->name }} - {{ $product->description }}
                    </span>
                    <span class="text-primary me-1" style="color: #C2185B !important; font-weight: 700;">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                </div>
                
                <div class="product-link-wrapper">
                    <a class="product-link-single" href="">
                        <i class="fa fa-shopping-bag me-2"></i>Beli Sekarang
                    </a>
                </div>
            </div> </div> @endforeach
    </div> </div>
                    
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