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
        <!-- Add Button -->
        {{-- <div>
            <button class="add-button" onclick="alert('Add Product Functionality')">+ Add Product</button>
        </div> --}}

        <!-- Welcome Text -->
        <div class="hero-section">
            <h1>Jasa Pembuatan Website, Pembuatan Game, dan Desain UI/UX di Malang</h1>
            <p>Di Codewave Software House, kami memadukan teknologi mutakhir, keterampilan teknis, dan keahlian industri untuk menciptakan solusi yang mendorong pertumbuhan bisnis Anda.</p>
            <button class="cta-button">Lihat Penawaran</button>
        </div>
        

        <!-- Cards Container -->
        <div class="cards-container">
            <!-- Card 1 -->
            <div class="card">
                <img src="{{ asset('assets/img/buy1.png') }}" alt="Product Image">
                <div class="card-content">
                    <h3 class="card-title">Jasa Pembuatan Website</h3>
                    <p class="card-description">Jasa Pembuatan Website Modern, Responsif, dan Profesional untuk Bisnis
                        Anda</p>
                    <div class="card-actions">
                        <button>Buy</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="{{ asset('assets/img/landscape-1.png') }}" alt="Product Image">
                <div class="card-content">
                    <h3 class="card-title">Jasa Pembuatan Game</h3>
                    <p class="card-description">Jasa Pembuatan Game Kreatif dan Interaktif untuk Platform Mobile dan PC
                        Anda</p>
                    <div class="card-actions">
                        <button>Buy</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="{{ asset('assets/img/landscape-1.png') }}" alt="Product Image">
                <div class="card-content">
                    <h3 class="card-title">Jasa Desain UI/UX</h3>
                    <p class="card-description">Menyediakan Jasa Desain Product, Kaos, Kemeja, dan UI/UX untuk Bisnis
                        Anda</p>
                    <div class="card-actions">
                        <button>Buy</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div>
            <button class="add-button" onclick="window.location='{{ route('tmbhproduct') }}'">+ Add Product</button>
        </div> --}}

    </main>

    <!--============= MAIN JS ===============-->
    <script src="{{ asset('assets/js/main2.js') }}"></script>
</body>

</html>

</html>