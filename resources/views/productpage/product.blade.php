<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/stylepdc.css') }}">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/img/navbarcw2.png') }}" type="image/svg+xml">

    <title>Form Jasa Website - Codewave</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <div class="header__container">
            <a href="#" class="header__logo">
                <i class="ri-cloud-fill"></i>
                <span>Cloud</span>
            </a>

            <button class="header__toggle" id="header-toggle">
                <i class="ri-menu-line"></i>
            </button>


        </div>
    </header>

    <!--=============== SIDEBAR ===============-->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar__container">
            <div class="sidebar__user">
                <div class="sidebar__img">
                    <img src="{{ asset('assets/img/perfil.png') }}" alt="image">
                </div>

                <div class="sidebar__info">
                    <h3>Rix Methil</h3>
                    <span>rix123@email.com</span>
                </div>
            </div>

            <div class="sidebar__content">
                <div>
                    <h3 class="sidebar__title">MANAGE</h3>

                    <div class="sidebar__list">
                        <a href="#" class="sidebar__link active-link">
                            <i class="ri-pie-chart-2-fill"></i>
                            <span>Dashboard</span>
                        </a>

                        <a href="{{ route('teamproduct') }}" class="sidebar__link">
                            <i class="ri-calendar-fill"></i>
                            <span>Team CodeWave</span>
                        </a>

                        <a href="{{ route('aboutus') }}" class="sidebar__link">
                            <i class="ri-arrow-up-down-line"></i>
                            <span>Services & Products</span>
                        </a>

                        <a href="{{ route('projectcdw') }}" class="sidebar__link">
                            <i class="ri-wallet-3-fill"></i>
                            <span>Market CodeWave</span>
                        </a>

                        <a href="{{ route('promobuy') }}" class="sidebar__link">
                            <i class="ri-wallet-3-fill"></i>
                            <span>Paket Combo</span>
                        </a>

                        {{-- <a href="#" class="sidebar__link">
                            <i class="ri-bar-chart-box-fill"></i>
                            <span>Statistics</span>
                        </a> --}}
                    </div>
                </div>

                <div>
                    <h3 class="sidebar__title">SETTINGS</h3>

                    <div class="sidebar__list">
                        <a href="{{ route('home') }}" class="sidebar__link">
                            <i class="ri-notification-2-fill"></i>
                            <span>Home</span>
                        </a>

                        <a href="#" class="sidebar__link">
                            <i class="ri-mail-unread-fill"></i>
                            <span>Callender</span>
                        </a>

                        <div class="sidebar__actions">
                            <button>
                                <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                                    <span>Theme</span>
                                </i>
                            </button>

                            <button class="sidebar__link">
                                <i class="ri-logout-box-r-fill"></i>
                                <span>Log Out</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            {{-- <div class="sidebar__actions">
                <button>
                    <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                        <span>Theme</span>
                    </i>
                </button>

                <button class="sidebar__link">
                    <i class="ri-logout-box-r-fill"></i>
                    <span>Log Out</span>
                </button>
            </div> --}}
        </div>
    </nav>

    <!--=============== MAIN ===============-->
    <main class="main container" id="main">

        <!-- Welcome Text -->
        <div class="hero-section">
            <h1>Solusi Digital Terdepan: Jasa Pembuatan Website, Game, dan Desain UI/UX Kreatif di Trenggalek!</h1>
            <p>Codewave: Spesialis website, desain UI/UX, game, & IT consulting. Hadirkan solusi digital inovatif untuk
                mendorong kesuksesan bisnis Anda!</p>
            <button class="cta-button">Lihat Penawaran</button>
        </div>

        <!-- Cards Container -->
        <div class="card-grid">
            <a class="card" href="#">
              <div class="background" style="background-image: url('assets/img/1.jpg')"></div>
              <div class="content">
                <p class="category">Jasa Pembuatan Website</p>
                <h3 class="heading">Product Name 1</h3>
              </div>
            </a>
          
            <a class="card" href="#">
              <div class="background" style="background-image: url('assets/img/2.jpg')"></div>
              <div class="content">
                <p class="category">Jasa Pembuatan Game</p>
                <h3 class="heading">Product Name 2</h3>
              </div>
            </a>
          
            <a class="card" href="#">
              <div class="background" style="background-image: url('assets/img/3.jpg')"></div>
              <div class="content">
                <p class="category">Desain UI/UX </p>
                <h3 class="heading">Product Name 3</h3>
              </div>
            </a>
          </div>
        
        <!--=============== FOOTER ===============-->
<footer class="footer">
    <div class="footer__container container">
        <p class="footer__text">
            © 2025 Codewave. All rights reserved. 
        </p>
        <div class="footer__socials">
            <a href="https://facebook.com" target="_blank" class="footer__link">
                <i class="ri-facebook-fill"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="footer__link">
                <i class="ri-twitter-fill"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="footer__link">
                <i class="ri-instagram-fill"></i>
            </a>
        </div>
    </div>
</footer>





    </main>
    {{-- <div>
        <button class="add-button" onclick="window.location='{{ route('tmbhproduct') }}'">+ Add Product</button>
    </div> --}}
    <!--============= MAIN JS ===============-->
    <script src="{{ asset('assets/js/main2.js') }}"></script>
</body>

</html>

</html>