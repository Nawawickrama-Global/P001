<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Luxury Furniture</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    
    <!-- Favicons -->
    <link href="{{url('assets/img/favicon.png')}}" rel="icon" />
    <link href="{{url('assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link
        href="{{url('https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap')}}"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center" style="background-color: #000">
        <div class="container d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown">
                        <a href="#"><span>Shop Now</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="product.html">product</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>

                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Explore</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="product.html">product</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>

                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <div class="get">
                <a href="index.html" class="getstarted">AURA OF INT</a>
            </div>
            <div class="icons">
                <button><i class="bi bi-search"></i></button>
                <button><i class="bi bi-bag"></i></button>
                <button><i class="bi bi-heart"></i></button>
                <button><i class="bi bi-person-circle"></i></button>
            </div>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Login Section ======= -->
        <section class="form-section">
            @yield('content')

        </section>
        <!-- End Login -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="footer-info">
                            <a href="#" class="brand">AURA OF INT</a>
                            <br />
                            <br />
                            <br />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <br />
                            <p><span>CONNECT ON SOCIALS</span></p>
                            <div class="social-links mt-3">
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bi bi-tiktok"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-pinterest"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col footer-links">
                        <h4>Products</h4>
                        <ul>
                            <li>
                                <a href="#">All Products</a>
                            </li>
                            <li>
                                <a href="#">Door Hardware</a>
                            </li>
                            <li>
                                <a href="#">Furniture</a>
                            </li>

                            <li>
                                <a href="#">Lighting</a>
                            </li>
                            <li>
                                <a href="#">Mirrors</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col footer-links">
                        <h4>Desire</h4>
                        <ul>
                            <li>
                                <a href="#">Inspiration</a>
                            </li>
                            <li>
                                <a href="#">Finishes</a>
                            </li>
                            <li>
                                <a href="#">Your Account</a>
                            </li>

                            <li>
                                <a href="#">Quote Request</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-2 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>

                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Newsletter</h4>
                        <p>
                            Be the first to know about new products, design news, specials
                            offers and promotions.
                        </p>
                        <form action="" method="post">
                            <input id="mail" type="email" name="email" placeholder="Enter your email" /><input
                                type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">&copy; 2022, All Rights Reserved</div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{url('https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>
    <script>
        const wishListButtons = document.querySelectorAll(".wish-list-button");
      wishListButtons.forEach(function (wishListButton) {
        wishListButton.addEventListener("click", function () {
          this.classList.toggle("active");
        });
      });
    </script>

    @stack('scripts')
</body>

</html>