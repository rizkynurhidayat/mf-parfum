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
  <div class="container-xxl py-5" id="Produk">
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
        <a class="btn btn-outline-primary border-2 {{ request('kategori') == 'terbaru' ? 'active' : '' }}" 
           href="{{ route('home', ['kategori' => 'terbaru']) }}#Produk">Terbaru</a>
    </li>
    <li class="nav-item me-2">
        <a class="btn btn-outline-primary border-2 {{ request('kategori') == 'terlaris' ? 'active' : '' }}" 
           href="{{ route('home', ['kategori' => 'terlaris']) }}#Produk">Terlaris</a>
    </li>
    <li class="nav-item me-0">
        <a class="btn btn-outline-primary border-2 {{ request('kategori') == 'termurah' ? 'active' : '' }}" 
           href="{{ route('home', ['kategori' => 'termurah']) }}#Produk">Termurah</a>
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
    <a class="product-link-single" href="{{ route('product.buy', $product->id) }}" target="_blank">
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