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
                <img src="{{ asset($hero->image) }}" alt="Hero Banner">
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
</body>
</html>