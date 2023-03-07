@extends('site.layout.main')
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
              style="background-image: url(assets/img/slide/slide-4.png)"
            >
              <div class="carousel-container">
                <div class="container">
                  <div class="row align-items-end">
                    <div class="col-md-9 text-start">
                      <h2 class="animate__animated animate__fadeInDown">
                        Discover all <br />
                        products
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
                        Discover all products
                      </h2>
                      <p class="animate__animated animate__fadeInUp">
                        Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea
                        ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                        dolorem mollitia ut. Similique ea voluptatem. Esse
                        doloremque accusamus repellendus deleniti vel. Minus et
                        tempore modi architecto.
                      </p>
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
        <!-- ======= Category Section ======= -->
        <section class="category">
          <div class="container">
            <div class="row">
              <div class="links">
                <a href="#">MIRRORS</a>
                <a href="#" class="active">DOOR HARDWARE</a>
                <a href="#">FURNITURE</a>
                <a href="#">LIGHTING</a>
              </div>
  
              <!--Category Slider-->
              <div class="clients-slider swiper mt-5">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <a href="#" class="active">drawer handles</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">door pulls</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="">door levers</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="">door knobs</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="">cabinet handles</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">cabinet handles</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">cabinet handles</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">cabinet handles</a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">cabinet handles</a>
                  </div>
                </div>
                <div class="swiper-button-prev">
                  <i class="bi bi-caret-left-fill"></i>
                </div>
                <div class="swiper-button-next">
                  <i class="bi bi-caret-right-fill"></i>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Category Section -->
  
        <!-- ======= product Section ======= -->
        <section id="product" class="product mt-2 pt-0">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-12">
                <!--Product sort-->
                <div class="sort mb-1 mb-0">
                  <div class="row justify-content-between">
                    <div class="col-md-3 col-sm-6">
                      <p>Showing 1 – 48 of 430 results</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <form>
                        <div class="form-group">
                          <select class="form-control" id="exampleInputSelect1">
                            <option value="option1">Default Sorting</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                          </select>
                          <i class="bi bi-chevron-down"></i>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-1.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-3.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-4.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-1.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-3.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-4.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-1.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-3.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-4.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-1.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-3.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-4.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-1.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-2.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-3.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="/assets/img/products/product-4.png"
                      class="img-fluid"
                      alt=""
                    />
                    <div class="wishlist">
                      <button class="wish-list-button">
                        <i class="bi bi-heart"></i>
                        <i class="bi bi-heart-fill"></i>
                      </button>
                    </div>
                    <div class="social">
                      <a href="">QUICK VIEW</a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Empire Mirror</h4>
                    <span>$ 15,630</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 d-flex justify-content-center mt-4">
                <nav>
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link green-btn" href="#"
                        ><i class="bi bi-arrow-left-short"></i> START</a
                      >
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">6</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">7</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link green-btn" href="#"
                        >END <i class="bi bi-arrow-right-short"></i
                      ></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- End product Section -->
      </main>

@endsection