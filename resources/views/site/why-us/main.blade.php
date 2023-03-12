@extends('site.layout.auth')
@section('content')
<section id="hero">
    <div
      id="heroCarousel"
      data-bs-interval="5000"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div
          class="carousel-item active"
          style="background-image: url(assets/img/slide/slide-6.png)"
        >
          <div class="carousel-container">
            <div class="container">
              <div class="row">
                <div class="col-md-9 text-start">
                  <h2 class="animate__animated animate__fadeInDown">
                    WHy BUY FROM US
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div
          class="carousel-item"
          style="background-image: url(assets/img/slide/slide-2.png)"
        >
          <div class="carousel-container">
            <div class="container">
              <div class="row">
                <div class="col-md-9 text-start">
                  <h2 class="animate__animated animate__fadeInDown">
                    Lorem Ipsum Dolor
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea
                    ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                    dolorem mollitia ut. Similique ea voluptatem. Esse
                    doloremque accusamus repellendus deleniti vel. Minus et
                    tempore modi architecto.
                  </p>
                  <a
                    href="#about"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto"
                    >Shop Now</a
                  >
                  <a
                    href="#about"
                    class="btn-get-started2 animate__animated animate__fadeInUp scrollto"
                    >BOOK A DESIGNER <i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div
          class="carousel-item"
          style="background-image: url(assets/img/slide/slide-3.png)"
        >
          <div class="carousel-container">
            <div class="container">
              <div class="row">
                <dv class="col-md-9 text-start">
                  <h2 class="animate__animated animate__fadeInDown">
                    Sequi ea ut et est quaerat
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea
                    ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                    dolorem mollitia ut. Similique ea voluptatem. Esse
                    doloremque accusamus repellendus deleniti vel. Minus et
                    tempore modi architecto.
                  </p>
                  <a
                    href="#about"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto"
                    >Shop Now</a
                  >
                  <a
                    href="#about"
                    class="btn-get-started2 animate__animated animate__fadeInUp scrollto"
                    >BOOK A DESIGNER <i class="bi bi-arrow-right"></i
                  ></a>
                </dv>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= chose section ======= -->
    <section class="about">
      <div class="container d-flex justify-content-center">
        <div class="col-lg-9 text-center">
          <h2>Why US</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </section>
    <!-- End chose section  -->

    <!-- ======= Popular Section ======= -->
    <section class="popular pt-5">
      <div class="container" data-aos="fade-up">
        <dv class="row justify-content-center">
          <div class="col-md-9">
            <header class="text-center mb-3">
              <h3 class="mb-0">OUR MOST POPULAR PIECES</h3>
              <div class="line mt-0"></div>
              <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </header>
          </div>
        </dv>

        <div
          class="row product-slider swiper"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide col-lg-3">
              <div class="card">
                <div class="card-img">
                  <div class="wishlist">
                    <button>
                      <i class="bi bi-heart"></i>
                      <i class="bi bi-heart-fill d-none"></i>
                    </button>
                  </div>
                  <img
                    src="/assets/img/products/product-1.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="content">
                  <a href="#">
                    <p>Empire Mirror</p>
                    <p><span>$ 15,630</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- End product item -->

            <div class="swiper-slide col-lg-3">
              <div class="card">
                <div class="card-img">
                  <div class="wishlist">
                    <button>
                      <i class="bi bi-heart"></i>
                      <i class="bi bi-heart-fill d-none"></i>
                    </button>
                  </div>
                  <img
                    src="/assets/img/products/product-2.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="content">
                  <a href="#">
                    <p>Empire Mirror</p>
                    <p><span>$ 15,630</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- End product item -->

            <div class="swiper-slide col-lg-3">
              <div class="card">
                <div class="card-img">
                  <div class="wishlist">
                    <button>
                      <i class="bi bi-heart"></i>
                      <i class="bi bi-heart-fill d-none"></i>
                    </button>
                  </div>
                  <img
                    src="/assets/img/products/product-3.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="content">
                  <a href="#">
                    <p>Empire Mirror</p>
                    <p><span>$ 15,630</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- End product item -->

            <div class="swiper-slide col-lg-3">
              <div class="card">
                <div class="card-img">
                  <div class="wishlist">
                    <button>
                      <i class="bi bi-heart"></i>
                      <i class="bi bi-heart-fill d-none"></i>
                    </button>
                  </div>
                  <img
                    src="/assets/img/products/product-4.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="content">
                  <a href="#">
                    <p>Empire Mirror</p>
                    <p><span>$ 15,630</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- End product item -->

            <div class="swiper-slide col-lg-3">
              <div class="card">
                <div class="card-img">
                  <div class="wishlist">
                    <button>
                      <i class="bi bi-heart"></i>
                      <i class="bi bi-heart-fill d-none"></i>
                    </button>
                  </div>
                  <img
                    src="/assets/img/products/product-4.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <div class="content">
                  <a href="#">
                    <p>Empire Mirror</p>
                    <p><span>$ 15,630</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- End product item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End popuar Section -->

    <!-- ======= Popular Section ======= -->
    <section class="why-us">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center mb-3">
            <header class="text-center mb-3">
              <h3 class="mb-0">BE INSPIRED</h3>
              <div class="line mt-0"></div>
              <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </header>
          </div>
          <div class="row">
            <div class="col-md-3 text-center mt-3">
              <img
                src="/assets/img/why-1.png"
                alt="brand"
                class="img-fluid"
              />
              <br />
              <a href="/">discover more</a>
            </div>

            <div class="col-md-3 text-center mt-3">
              <img
                src="/assets/img/why-1.png"
                alt="brand"
                class="img-fluid"
              />
              <br />
              <a href="/">discover more</a>
            </div>

            <div class="col-md-3 text-center mt-3">
              <img
                src="/assets/img/why-1.png"
                alt="brand"
                class="img-fluid"
              />
              <br />
              <a href="/">discover more</a>
            </div>

            <div class="col-md-3 text-center mt-3">
              <img
                src="/assets/img/why-1.png"
                alt="brand"
                class="img-fluid"
              />
              <br />
              <a href="/">discover more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End popuar Section -->
  </main>
  <!-- End #main -->
@endsection