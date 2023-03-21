@extends('site.layout.auth')
@section('content')
<!-- ======= product Section ======= -->
<section class="cart pt-5">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="form-section mt-3">
          <div class="form-group mt-2">
            <label for="exampleFormControlInput1">First Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Last Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Town</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mt-2">
                <label for="exampleFormControlInput1">City</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Postal Code</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Email Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-2">
            <label for="exampleFormControlInput1">Contact Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-section mt-3">
          <p>Payment Method</p>
          <form action="">
            <div class="payment-btn">
              <input type="radio" id="radio1" name="radio-group1">
              <label for="radio1"><img src="/assets/images/payments/paypal.png"></label>
            </div>
            <div class="payment-btn">
              <input type="radio" id="radio2" name="radio-group2">
              <label for="radio2"><img src="/assets/images/payments/paypal.png"></label>
            </div>
          </form>

        </div>
        <div class="form-section mt-3">
          <h3 class="mb-3 h4">ORDER SUMMARY</h3>
          <p class="d-flex justify-content-between">
            <span>Sub total</span> <span id="subTotal">$5654</span>
          </p>
          <p class="d-flex justify-content-between">
            <span>Coupon</span> <span id="couonCost">-</span>
          </p>
          <p class="d-flex justify-content-between">
            <span>Discount </span> <span id="discuntCost">-</span>
          </p>
          <p class="d-flex justify-content-between">
            <span>Delivery</span> <span id="deliveryCost">Free</span>
          </p>
          <hr />
          <p class="d-flex justify-content-between">
            <span><strong>Total</strong></span>
            <span id="deliveryCost"><strong>$5654</strong></span>
          </p>
        </div>

        <div class="btn-section mt-3 text-center">
          <button class="green" type="button">
            PAY NOW
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End product Section -->

<!-- ======= Popular Section ======= -->
<section class="popular pt-5">
  <div class="container" data-aos="fade-up">
    <dv class="row justify-content-center">
      <div class="col-md-9">
        <header class="text-center mb-3">
          <h3 class="mb-0">YOU MAY INTERESTED IN</h3>
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
<!-- End checkout Section -->
<!-- End #main -->
@endsection