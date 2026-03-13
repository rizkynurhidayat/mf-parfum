<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MF Parfum</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset ('foody2')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset ('foody2')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <style>
        body { padding-top: 80px; }
        
        /* Penyesuaian warna agar sesuai dengan tema Rose MF Parfum */
        .bg-rose-custom {
            background-color: #ffb8b8 !important; /* Senada dengan Firm Visit di About */
        }
        
        .section-header h1 {
            color: #C2185B; /* Warna accent rose gelap */
        }

        .contact-info-box {
            border-radius: 20px;
            background-color: #C2185B; /* Warna solid branding */
        }

        .page-header {
            background: linear-gradient(rgba(255, 184, 184, .7), rgba(255, 184, 184, .7)), url(images/aboutt.jpeg) center center no-repeat;
            background-size: cover;
        }
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
            <li><a href="{{ route('home') }}#Footer">Tentang</a></li>
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

    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-3">Mari Terhubung</h1>
                <p>Silakan hubungi kami untuk pertanyaan seputar produk, kemitraan, atau kunjungan ke gerai MF Parfum.</p>
            </div>
            
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-info-box text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Telepon</h5>
                        <p href="{{ $information->phone }}" class="mb-5"><i class="fa fa-phone-alt me-3"></i>08876735482793</p>
                        
                        <h5 class="text-white">Alamat Kantor</h5>
                        <p href="{{ $information->location }}" class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ciptayasa, Kerang Serang, Jawa Barat, Indonesia, 42271</p>
                        
                        <h5 class="text-white">Ikuti Kami</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ $information->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ $information->tiktok }}"><i class="fab fa-tiktok"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href="{{ $information->instagram }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15861.132328909594!2d107.1044289694518!3d-6.357392372945193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699a163636260b%3A0x7f1686b61b8eb43c!2sJl.%20Blk.%20L%2C%20Serang%2C%20Cikarang%20Sel.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017530!5e0!3m2!1sid!2sid!4v1773371336954!5m2!1sid!2sid"
                            frameborder="0" style="border:0; border-radius: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <footer id="Footer" class="custom-footer">
        <div class="footer-container">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="img/logo-mf.png" alt="MF Parfum Logo">
                    <h2>MF Parfum</h2>
                </div>
                <p>Aroma elegan untuk setiap momen berharga Anda. Temukan jati dirimu melalui wewangian eksklusif kami.</p>
                <div class="social-links">
                    <a href="{{ $information->twitter }}" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $information->tiktok  }}" target="_blank" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{{ $information->instagram }}" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Address</h4>
                <div class="contact-item">
                    <a href="{{ $information->location }}" target="_blank" style="text-decoration: none;">
                        <i class="fa fa-map-marker-alt" style="color:white;"></i>
                        <span style="color: white;">Jl. Ciptayasa, Kerang Serang, Jawa Barat, Indonesia, 42271</span>
                    </a>
                </div>
                <div class="contact-item">
                    <i class="fa fa-phone-alt"></i>
                    <span>08282322156412</span>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="">Our Services</a></li>
                    <li><a href="{{ route('terms') ?? '#' }}">Terms & Condition</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 MF Parfum. All Rights Reserved.</p>
        </div>
    </footer>
    <script>
        function openMenu() { document.getElementById("mobile-nav").style.display = "block"; }
        function closeMenu() { document.getElementById("mobile-nav").style.display = "none"; }
        
        $(document).ready(function() {
            if (typeof WOW !== 'undefined') { new WOW().init(); }
        });
    </script>
</body>
</html>