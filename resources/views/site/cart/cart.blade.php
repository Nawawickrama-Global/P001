@extends('site.layout.auth')
@section('content')
  <!-- ======= product Section ======= -->
  <section class="cart pt-5">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          @foreach ($items as $item)
          @php
            if ($item->product->product_type == 'single'){
              $image = $item->product->product_image;
              $price = $item->product->sale_price;
            }else{
              $image = $item->variant->image;
              $price = $item->variant->sales_price;
            }
          @endphp
     
          <div class="card mt-3">
            <div class="row justify-content-center align-items-center">
              <div class="col-5 img-content">
                <img
                  src="{{ asset('storage/images/' . $image) }}"
                  alt="Product img"
                  class="img-fluid"
                />
              </div>
              <div class="col-7 text-contet">
                <div class="cross">
                  <button>
                    <i class="bi bi-x"></i>
                  </button>
                </div>
                <h4>{{ $item->product->title }}</h4>
                <p>
                  {{ $item->product->short_description }}
                  <br />
                </p>
                <p><strong>{{ Config::get('app.currency_code').$price }}</strong></p>
                <p class="buttonChange">
                  <button><i class="bi bi-dash-square"></i></button>
                  <span>{{ $item->qty }}</span>
                  <button><i class="bi bi-plus-square"></i></button>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-lg-6">
          <div class="form-section mt-3">
            <p>Do you have a coupon code?</p>
            <form action="/action_page.php">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                  <input
                    type="text"
                    id="couponCode"
                    name="couponCode"
                    placeholder="Coupon code"
                  /><br />
                </div>
                <div class="col-lg-5">
                  <button class="m-0">APPLY COUPON</button>
                </div>
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
            <button
              class="green"
              type="button"
              {{-- data-bs-toggle="modal"
              data-bs-target="#checkOut" --}}
            >
              CHECKOUT
            </button>
            <br />
            <p class="mt-3">OR</p>
            <button class="primary">ADD TO QUOTE</button>
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

  <!-- ======= Checehout Section ======= -->
  {{-- <div
    class="modal fade"
    id="checkOut"
    tabindex="-1"
    aria-labelledby="checkOutLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="row">
          <div class="col-lg-7 text-area">
            <h4>How would you like to get your order?</h4>
            <form
              action="forms/contact.php"
              method="post"
              class="php-email-form"
            >
              <div class="row gy-4">
                <div class="col-md-6">
                  <input
                    type="text"
                    name="fname"
                    class="form-control"
                    placeholder="First Name"
                    required
                  />
                </div>
                <div class="col-md-6">
                  <input
                    type="text"
                    name="lname"
                    class="form-control"
                    placeholder="Last Name"
                    required
                  />
                </div>

                <div class="col-md-12">
                  <input
                    type="text"
                    name="streetAddress"
                    class="form-control"
                    placeholder="Street address"
                    required
                  />
                </div>

                <div class="col-md-4 mr-0">
                  <input
                    type="text"
                    name="town"
                    class="form-control"
                    placeholder="Town"
                    required
                  />
                </div>

                <div class="col-md-4">
                  <input
                    type="text"
                    name="city"
                    class="form-control"
                    placeholder="City"
                    required
                  />
                </div>

                <div class="col-md-4">
                  <input
                    type="text"
                    name="pcode"
                    class="form-control"
                    placeholder="Postal Code"
                    required
                  />
                </div>

                <div class="col-md-12 mt-2">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Your email adress"
                    required
                  />
                </div>

                <div class="col-md-12 mt-2">
                  <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    placeholder="Phone Number"
                    required
                  />
                </div>

                <div class="col-md-12 next-btn">
                  <button class="active">Delivery</button>
                  <button>Shipping</button>
                  <button>Payment</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-5 img-part">
            <div class="close-btn">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <button type="button" class="btn btn-primary">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- End checkout Section -->
<!-- End #main -->
@endsection