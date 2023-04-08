@extends('site.layout.main')
@section('content')
<!-- End Hero -->

<main id="main">
  <!-- ======= chose section ======= -->
  <section class="about mt-5">
    <div class="container d-flex justify-content-center">
      <div class="col-lg-9 text-center pt-3">
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

      <div class="row product-slider swiper" data-aos="fade-up" data-aos-delay="200">
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
                <img src="/assets/img/products/product-1.png" alt="" class="img-fluid" />
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
                <img src="/assets/img/products/product-2.png" alt="" class="img-fluid" />
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
                <img src="/assets/img/products/product-3.png" alt="" class="img-fluid" />
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
                <img src="/assets/img/products/product-4.png" alt="" class="img-fluid" />
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
                <img src="/assets/img/products/product-4.png" alt="" class="img-fluid" />
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
            <img src="/assets/img/why-1.png" alt="brand" class="img-fluid" />
            <br />
            <a href="/">discover more</a>
          </div>

          <div class="col-md-3 text-center mt-3">
            <img src="/assets/img/why-1.png" alt="brand" class="img-fluid" />
            <br />
            <a href="/">discover more</a>
          </div>

          <div class="col-md-3 text-center mt-3">
            <img src="/assets/img/why-1.png" alt="brand" class="img-fluid" />
            <br />
            <a href="/">discover more</a>
          </div>

          <div class="col-md-3 text-center mt-3">
            <img src="/assets/img/why-1.png" alt="brand" class="img-fluid" />
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