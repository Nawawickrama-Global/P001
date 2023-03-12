@extends('site.layout.auth')
@section('content')

    <!-- ======= Hero Section ======= -->
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
              style="background-image: url(assets/img/slide/slide-5.png)"
            >
              <div class="carousel-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9 text-start">
                      <h2 class="animate__animated animate__fadeInDown">
                        Luxury FURNITURE <br />
                        AND FITTINGS
                      </h2>
                      <p class="animate__animated animate__fadeInUp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.
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
              <h2>ABOUT US</h2>
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
              <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
        </section>
        <!-- End chose section  -->
  
        <!-- ======= About Video Section ======= -->
        <section id="about-video" class="about-video">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h5>Inspiring and Liberating</h5>
                <hr />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
  
                <br />
                <h5>Elegant</h5>
                <hr />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
  
                <br />
                <h5>Daring</h5>
                <hr />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 video-box align-self-baseline">
                <img src="assets/img/video-banner.jpg" class="img-fluid" alt="" />
                <a
                  href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
                  class="glightbox play-btn mb-4"
                  data-vbtype="video"
                  data-autoplay="true"
                ></a>
              </div>
            </div>
          </div>
        </section>
        <!-- End About Video Section -->
      </main>
      <!-- End #main -->

@endsection