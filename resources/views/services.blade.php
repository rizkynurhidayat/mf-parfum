<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - MF Parfum</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link href="{{ asset('foody2') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('foody2') }}/lib/animate/animate.min.css" rel="stylesheet">

    <style>
        /* Tambahan CSS Khusus Service */
        .service-card {
            background: #fff;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            border: none;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(194, 24, 91, 0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: rgba(194, 24, 91, 0.1);
            color: #C2185B;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 25px;
            transition: 0.4s;
        }

        .service-card:hover .service-icon {
            background: #C2185B;
            color: #fff;
        }

        .service-title {
            color: #C2185B;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .service-text {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <nav>
        <img class="img-nav" src="images/logo.jpeg" width="30px" height="30px" alt="Logo">
        <ul class="ul-nav">
            <li><a href="{{ url('/') }}#Beranda">Beranda</a></li>
            <li><a href="{{ url('/') }}#Produk">Produk</a></li>
            <li><a href="{{ url('/') }}#Tentang">Galeri</a></li>
            <li><a href="{{ url('/') }}#Footer">Tentang

            </a></li>
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
    <div class="container-xxl py-5" style="margin-top: 0px;">
        <div class="container text-center mx-auto" style="max-width: 700px;">
            <h1 class="display-5 mb-3" style="color: #C2185B;">Layanan Kami</h1>
            <p class="mb-5">Kami berkomitmen memberikan pengalaman terbaik bagi Anda, mulai dari kualitas aroma hingga pelayanan purna jual.</p>
        </div>

        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h4 class="service-title">Custom Fragrance</h4>
                        <p class="service-text">Konsultasikan aroma yang paling sesuai dengan kepribadian Anda untuk menciptakan kesan yang tak terlupakan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <h4 class="service-title">Pengiriman Cepat</h4>
                        <p class="service-text">Layanan pengiriman ke seluruh Indonesia dengan pengemasan ekstra aman (bubble wrap tebal) untuk menjaga kualitas botol.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h4 class="service-title">Program Kemitraan</h4>
                        <p class="service-text">Kesempatan bergabung menjadi reseller atau mitra resmi MF Parfum dengan keuntungan yang menjanjikan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-gift"></i>
                        </div>
                        <h4 class="service-title">Gift & Hampers</h4>
                        <p class="service-text">Kami melayani pembuatan paket kado parfum kustom untuk acara spesial seperti ulang tahun atau pernikahan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-certificate"></i>
                        </div>
                        <h4 class="service-title">Jaminan Kualitas</h4>
                        <p class="service-text">Setiap produk diproduksi dengan bahan premium dan melalui tahap QC ketat sebelum sampai ke tangan Anda.</p>
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
                <a href="{{ $information->tiktok }}" target="_blank" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $information->instagram }}" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
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
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 MF Parfum. All Rights Reserved.</p>
    </div>
</footer>

<a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $information->phone) }}?text=Halo%20MF%20Parfum,%20saya%20ingin%20tanya%20mengenai%20produk%20dan%20kemitraan." 
   class="cs-service" 
   target="_blank" 
   style="position: fixed; bottom: 30px; right: 30px; z-index: 999;">
    <img src="images/chat5.png" alt="Customer Service" style="width: 50px; height: 50px;">
</a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('foody2') }}/lib/wow/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="main.js"></script>
</body>
</html>