<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWave - Secure IT solutions</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('assets/img/navbarcw2.png') }}" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="{{ asset('assets/img/codewave.png') }}" alt="Solutry logo">
            </a>

            <button class="nav-toggle-btn" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="close-outline" class="close"></ion-icon>
            </button>

            <nav class="navbar">
                <div class="container">
                    <ul class="navbar-list">

                        <li>
                            <a href="#home" class="navbar-link" data-navbar-link>Home</a>
                        </li>

                        <li>
                            <a href="#features" class="navbar-link" data-navbar-link>Features</a>
                        </li>

                        <li>
                            <a href="#service" class="navbar-link" data-navbar-link>Service</a>
                        </li>

                        <li>
                            <a href="#blog" class="navbar-link" data-navbar-link>Blog</a>
                        </li>

                        <li>
                            <a href="#newsletter" class="navbar-link" data-navbar-link>Newsletter</a>
                        </li>

                    </ul>
                </div>
            </nav>

            {{-- <button class="btn btn-secondary">
        <span>Contact</span>

        <ion-icon name="chevron-forward-outline"></ion-icon>
      </button> --}}

            {{-- <div style="display: flex; gap: 20px; align-items: center;">
                <!-- Tombol Client Support -->
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <span style="margin-top: 5px; font-size: 14px; font-weight: 400; color: #333;">0856 - 0450 -
                        7401</span>
                </div> --}}

                <!-- Tombol Contact Us -->
                {{-- <button class="btn btn-secondary">
          <span>Contact</span>
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button> --}}
                <a href="https://wa.me/6285604507401" class="btn btn-secondary">
                    <span>Contact</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

            </div>

        </div>
    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="hero" id="home">

                <img src="{{ asset('assets/img/shape1.png') }}" alt="Illustration art" class="shape shape-1">
                <img src="{{ asset('assets/img/shape2.png') }}" alt="Illustration art" class="shape shape-2">
                <img src="{{ asset('assets/img/shape3.png') }}" alt="Illustration art" class="shape shape-3">

                <div class="container">

                    <figure class="hero-banner">
                        <img src="{{ asset('assets/img/hero-banner.png') }}" alt="Illustration art" loading="lazy"
                            class="w-100">
                    </figure>

                    <div class="hero-content">

                        {{-- <h2 class="h1 hero-title">Secure IT solutions for a more secure environment</h2> --}}
                        <h2 class="h1 hero-title">Your trusted solution for a sleek, secure website.</h2>

                        <p class="section-text">
                            Professional website development services tailored to your business needs.
                            Enhance your online presence and maximize engagement with cutting-edge designs.
                            Let us build a website that drives growth and success.
                        </p>

                        <button class="btn btn-primary">
                            <span>Get Started Now</span>

                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>

                    </div>

                </div>

            </section>





            <!--
        - #FEATURES
      -->

            <section class="features" id="features">
                <div class="container">

                    <p class="section-subtitle">How Can Help You</p>

                    <h2 class="h2 section-title">We’re helping teams do their best work</h2>

                    <ul class="features-list">

                        <li>
                            <div class="features-card">

                                <div class="card-icon">
                                    <img src="{{ asset('assets/img/features-icon-1.png') }}" alt="Illustration icon">
                                </div>

                                <h3 class="h3 card-title">Web Developer</h3>

                                <p class="card-text">
                                    Builds websites using front-end, back-end, or both tools to create interactive web
                                    experiences.
                                </p>

                                <a href="{{ route('product') }}" class="card-link">
                                    <span>Order Now</span>
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="features-card">

                                <div class="card-icon">
                                    <img src="{{ asset('assets/img/features-icon-2.png') }}" alt="Illustration icon">
                                </div>

                                <h3 class="h3 card-title"> Game Developer</h3>

                                <p class="card-text">
                                    Creates games using languages like C++, C#, Python, and game engines for diverse
                                    gaming platforms.
                                </p>

                                <a href="{{ route('product') }}" class="card-link">
                                    <span>Order Now</span>
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="features-card">

                                <div class="card-icon">
                                    <img src="{{ asset('assets/img/features-icon-3.png') }}" alt="Illustration icon">
                                </div>

                                <h3 class="h3 card-title"> UI/UX Developer</h3>

                                <p class="card-text">
                                    Designs user-friendly interfaces by combining coding, tools, and user experience
                                    principles.
                                </p>

                                <a href="{{ route('product') }}" class="card-link">
                                    <span>Order Now</span>
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="features-card">

                                <div class="card-icon">
                                    <img src="{{ asset('assets/img/features-icon-4.png') }}" alt="Illustration icon">
                                </div>

                                <h3 class="h3 card-title">IT Consultant</h3>

                                <p class="card-text">
                                    Advises businesses on technology strategies by analyzing needs and providing
                                    tailored solutions.
                                </p>

                                <a href="{{ route('product') }}" class="card-link">
                                    <span>Order Now</span>
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
        - #SERVICE
      -->

            <section class="service" id="service">
                <div class="container">

                    <figure class="service-banner">
                        <img src="{{ asset('assets/img/service-1.png') }}" alt="Illustration art" loading="lazy"
                            class="w-100">
                    </figure>

                    <div class="service-content">

                        <p class="section-subtitle">Services We Offer</p>

                        <h2 class="h2 section-title">We are here, to help your startup business</h2>

                        <ul class="service-list">

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">Cloud Databases</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">Website Hosting</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">SEO Optimization</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">File Backup</h3>

                            </li>

                        </ul>

                    </div>

                    <figure class="service-banner">
                        <img src="{{ asset('assets/img/service-2.png') }}" alt="Illustration art" loading="lazy"
                            class="w-100">
                    </figure>

                    <div class="service-content">

                        <p class="section-subtitle">Our Services</p>

                        <h2 class="h2 section-title">Best IT & technology service in your area</h2>

                        <ul class="service-list">

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">Web Development</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">Game Development</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">UI/UX Developer</h3>

                            </li>

                            <li class="service-item">

                                <div class="service-item-icon">
                                    <ion-icon name="checkmark-outline"></ion-icon>
                                </div>

                                <h3 class="h3 service-item-title">IT Consultant</h3>

                            </li>

                        </ul>

                    </div>

                </div>
            </section>





            <!--
        - #BLOG
      -->

            <section class="blog" id="blog">
                <div class="container">

                    <p class="section-subtitle">Latest News</p>

                    <h2 class="h2 section-title">Our latest articles & resources</h2>

                    <ul class="blog-list">

                        <li>
                            <div class="blog-card">

                                <figure class="blog-banner">
                                    <a href="https://medium.com/%40shaunthornburgh/setting-up-a-new-laravel-project-with-vue-3-and-tailwindcss-cb9562ff6689"
                                        target="_blank">
                                        <img src="{{ asset('assets/img/blog1.jpg') }}"
                                            alt="How is technology working with new things?" loading="lazy"
                                            class="w-100">
                                    </a>
                                </figure>

                                <div class="blog-content">

                                    <ul class="blog-meta-list">

                                        <li class="blog-meta-item">
                                            <ion-icon name="pricetag-outline"></ion-icon>

                                            <a href="https://medium.com/%40shaunthornburgh/setting-up-a-new-laravel-project-with-vue-3-and-tailwindcss-cb9562ff6689"
                                                target="_blank" class="blog-meta-link">Web Development</a>
                                        </li>

                                        <li class="blog-meta-item">
                                            <ion-icon name="calendar-number-outline"></ion-icon>

                                            <time class="blog-meta-time" datetime="2025-01-1">1 Jan, 2025</time>
                                        </li>

                                    </ul>

                                    {{-- <h3 class="h3 blog-title">
                    <a href="#">How is technology working with new things?</a>
                  </h3> --}}

                                    <h3 class="h3 blog-title">
                                        <a href="https://medium.com/%40shaunthornburgh/setting-up-a-new-laravel-project-with-vue-3-and-tailwindcss-cb9562ff6689"
                                            target="_blank">
                                            Laravel Setup with Vue 3 & TailwindCSS
                                        </a>
                                    </h3>


                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="blog-banner">
                                    <a href="https://www.gamelab.id/news/1670-mengenal-profesi-game-developer-definisi-tugas-skill-dan-prospek-kerjanya?utm_source=chatgpt.com"
                                        target="_blank">
                                        <img src="{{ asset('assets/img/blog2.jpg') }}"
                                            alt="Top 10 important tips on IT services & design" loading="lazy"
                                            class="w-100">
                                    </a>
                                </figure>

                                <div class="blog-content">

                                    <ul class="blog-meta-list">

                                        <li class="blog-meta-item">
                                            <ion-icon name="pricetag-outline"></ion-icon>

                                            <a href="https://www.gamelab.id/news/1670-mengenal-profesi-game-developer-definisi-tugas-skill-dan-prospek-kerjanya?utm_source=chatgpt.com"
                                                target="_blank" class="blog-meta-link">Game Development</a>
                                        </li>

                                        <li class="blog-meta-item">
                                            <ion-icon name="calendar-number-outline"></ion-icon>

                                            <time class="blog-meta-time" datetime="2025-01-2">2 Jan, 2025</time>
                                        </li>

                                    </ul>

                                    {{-- <h3 class="h3 blog-title">
                    <a href="#">Top 10 important tips on IT services & design</a>
                  </h3> --}}

                                    <h3 class="h3 blog-title">
                                        <a href="https://www.gamelab.id/news/1670-mengenal-profesi-game-developer-definisi-tugas-skill-dan-prospek-kerjanya?utm_source=chatgpt.com"
                                            target="_blank">
                                            Game Developer: Roles, Skills, and Career Outlook
                                        </a>
                                    </h3>


                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="blog-banner">
                                    <a href="https://informatics.uii.ac.id/2023/04/17/pentingnya-ui-ux-pada-aplikasi-atau-web/?utm_source=chatgpt.com"
                                        target="_blank">
                                        <img src="{{ asset('assets/img/blog3.jpg') }}"
                                            alt="How our company works in different ways" loading="lazy"
                                            class="w-100">
                                    </a>
                                </figure>

                                <div class="blog-content">

                                    <ul class="blog-meta-list">

                                        <li class="blog-meta-item">
                                            <ion-icon name="pricetag-outline"></ion-icon>

                                            <a href="https://informatics.uii.ac.id/2023/04/17/pentingnya-ui-ux-pada-aplikasi-atau-web/?utm_source=chatgpt.com"
                                                target="_blank" class="blog-meta-link">Design</a>
                                        </li>

                                        <li class="blog-meta-item">
                                            <ion-icon name="calendar-number-outline"></ion-icon>

                                            <time class="blog-meta-time" datetime="2025-01-03">3 Jan, 2025</time>
                                        </li>

                                    </ul>

                                    {{-- <h3 class="h3 blog-title">
                    <a href="#">How our company works in different ways</a>
                  </h3> --}}

                                    <h3 class="h3 blog-title">
                                        <a href="https://informatics.uii.ac.id/2023/04/17/pentingnya-ui-ux-pada-aplikasi-atau-web/?utm_source=chatgpt.com"
                                            target="_blank">
                                            The Importance of UI/UX in Applications or Websites
                                        </a>
                                    </h3>


                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>


            <!--
     - TESTIMONI + CRUD
      -->
      





            <!--
        - #NEWSLETTER
      -->

            {{-- <section class="newsletter" id="newsletter">
                <div class="container">

                    <figure class="newsletter-banner">
                        <img src="{{ asset('assets/img/newsletter.png') }}" alt="Illustration art" loading="lazy"
                            class="w-100">
                    </figure>

                    <div class="newsletter-content">

                        <p class="section-subtitle">Submit Our Newsletter</p>

                        <h2 class="h2 section-title">The latest resources, sent to your inbox weekly</h2>

                        <form action="" class="newsletter-form">
                            <input type="email" name="email" required placeholder="Enter your email address"
                                class="input-field">

                            <button type="submit" class="btn btn-primary">
                                <span>Submit Now</span>

                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </button>
                        </form>

                    </div>

                </div>
            </section> --}}

            <section class="newsletter" id="newsletter">
                <div class="container">
            
                    <figure class="newsletter-banner">
                        <img src="{{ asset('assets/img/newsletter.png') }}" alt="Illustration art" loading="lazy"
                            class="w-100">
                    </figure>
            
                    <div class="newsletter-content">
            
                        <p class="section-subtitle">Submit Our Newsletter</p>
            
                        <h2 class="h2 section-title">The latest resources, sent to your inbox weekly</h2>
            
                        <form action="https://api.web3forms.com/submit" method="POST" class="newsletter-form">
                            <!-- Kolom email -->
                            <input type="hidden" name="access_key" value="defca4b6-60bc-4abe-a781-40bfe2040351">    
                            <div class="form-group">
                                <input type="email" name="email" required placeholder="Enter your email address"
                                    class="input-field">
                            </div>

                            <!-- Kolom nama -->
                            <div class="form-group">
                                <input type="text" name="nama" required placeholder="Enter your name in here"
                                    class="input-field">
                            </div>
            
                            <!-- Kolom pesan -->
                            <div class="form-group">
                                <textarea name="message" placeholder="Enter your message" rows="4" 
                                    class="input-field" required></textarea>
                            </div>
            
                            <button type="submit" class="btn btn-primary">
                                <span>Submit Now</span>
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </button>
                        </form>
            
                    </div>
            
                </div>
            </section>
            
            

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="{{ asset('assets/img/codewave.png') }}" alt="Solutry logo">
                    </a>

                    <p class="section-text">
                        Your trusted solution for creating a secure, sleek, affordable, and high-quality website, with a
                        guarantee! <br> Checkout now!
                    </p>

                    <div class="location-text">
                        <div class="location-icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="address">
                            Jl. Trenggalek Kota
                        </address>
                    </div>

                </div>

                <div class="quicklink-box">
                    <p class="h3 quicklink-title">Quick links</p>

                    <ul class="quicklink-list">

                        <li>
                            <a href="{{ route('product') }}" class="quicklink">Web Developer</a>
                        </li>

                        <li>
                            <a href="{{ route('product') }}" class="quicklink">Game Developer</a>
                        </li>

                        <li>
                            <a href="{{ route('product') }}" class="quicklink">UI/UX Developer</a>
                        </li>

                        <li>
                            <a href="{{ route('product') }}" class="quicklink">IT Consultant</a>
                        </li>

                        <li>
                            <a href="#service" class="quicklink">Service</a>
                        </li>

                        <li>
                            <a href="#blog" class="quicklink">Blog</a>
                        </li>

                        <li>
                            <a href="https://www.google.com/maps/place/Trenggalek,+East+Java,+Indonesia/"
                                class="quicklink" target="_blank" rel="noopener noreferrer">Maps</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink">Testimoni</a>
                        </li>

                        <li>
                            <a href="https://wa.me/6285604507401" class="quicklink" target="_blank"
                                rel="noopener noreferrer">Contact</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink">FAQ</a>
                        </li>

                    </ul>
                </div>

                <div class="contact">
                    <p class="h3 contact-title">Contact with us</p>

                    <ul class="contact-list">

                        <li class="contact-item">
                            <div class="contact-icon">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <a href="mailto:codewave@gmail.com" class="contact-link">codewaveinhere@gmail.com</a>
                        </li>

                        <li class="contact-item">
                            <div class="contact-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <a href="https://wa.me/6285604507401" target="_blank" rel="noopener noreferrer"
                                class="contact-link">0856 - 0450 - 7401</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2025 <a href="#">codewave</a>. All Rights Reserved
                </p>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>





    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="go-top active" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>





    <!--
    - custom js link
  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
