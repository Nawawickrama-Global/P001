@extends('site.layout.main-2')
@section('content')
    <!-- ======= product Section ======= -->
    <section class="product-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/images/' . $product->feature_image) }}" class="d-block w-100"
                                    alt="Image 1" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/' . $product->product_image) }}" class="d-block w-100"
                                    alt="variant" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div id="thumbnailCarousel">
                        <div class="overflow-auto thumbnailClass">
                            {{-- @foreach ($product->variant as $variant)
                                <div class="thumbnail" data-target="#productCarousel" data-slide-to="0">
                                    <img src="{{ asset('storage/images/' . $variant->image) }}" class="d-block w-100" />
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="_product-detail-content">
                        {{-- <span>{{ $product->category->parent->name }} /</span> --}}
                        <a
                            href="{{ route('products.index') }}?category={{ $product->category->name }}">{{ $product->category->name }}</a>

                        <br /><br />
                        <h3>{{ $product->title }}</h3>
                        <div class="_p-price-box">
                            <div class="p-list mb-4 pb-2">
                                <strong>
                                    <span> Price: </span>
                                    <span class="price" id="price">
                                        {{ $product->variant->count() > 1 ? Config::get('app.currency_code') . $product->variant->min('sales_price') . ' - ' . Config::get('app.currency_code') . $product->variant->max('sales_price') : Config::get('app.currency_code') . $product->variant->min('sales_price') }}
                                    </span>
                                </strong>
                            </div>

                            <div class="_p-features">
                                {{ $product->long_description }}
                            </div>
                            <form action="{{ route('checkout') }}" method="get" id="product-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <div class="color bb pb-3 mt-5">
                                    <p><strong>Size : </strong> <span id="selector"></span></p>
                                    <div class="row">
                                        <div class="col-lg-2 mt-2">
                                            <select class="form-control" name="size" id="size" style="width: unset !important">
                                                <option value="" selected disabled>Select Size</option>
                                                @foreach ($product->variant as $variant)
                                                    <option data-price="{{ $variant->sales_price }}"
                                                        value="{{ $variant->variant_id }}">{{ $variant->size }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="color bb pb-3 mt-5 d-none" id="finishes">
                                    @foreach ($product->productAttr as $productAttr)
                                        <div>
                                            <p><strong>{{ $productAttr->attribute->name }} : </strong> <span
                                                    class="variations"></span></p>
                                            <div class="row">
                                                <div class="col-lg-12 mt-2">
                                                    @foreach ($productAttr->attribute->variation as $variation)
                                                        <div class="radio-btn">
                                                            <input type="radio" required class="variation"
                                                                id="{{ $variation->variation_id }}"
                                                                data-name="{{ $variation->name }}"
                                                                data-percentage="{{ $variation->percentage }}"
                                                                value="{{ $variation->variation_id }}"
                                                                name="{{ $productAttr->attribute->attribute_id == 1 || $productAttr->attribute->attribute_id == 2 ? 'variation_id' : $productAttr->attribute->name }}">
                                                            <label for="{{ $variation->variation_id }}"><img
                                                                    src="{{ asset('storage/images/' . $variation->image) }}"
                                                                    alt="Color" /> </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="_p-qty-and-cart mt-4 d-flex">
                                    <div class="_p-add-cart">
                                        <div class="_p-qty">
                                            <span>Qty:</span>

                                            <input type="number" class="qty" name="qty" id="number"
                                                value="1" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="total_price" id="total_price">
                                    <button class="btn btn-buy" tabindex="0">
                                        <i class="fa fa-shopping-cart"></i> Buy Now
                                    </button>
                                    <button type="button" class="btn btn-cart" id="add-to-cart" tabindex="0"
                                        style="border: 2px solid #ba9739">
                                        <i class="fa fa-shopping-cart"></i> Add to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product Hero -->

    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <!-- Feature Tabs -->
                <div class="row feture-tabs justify-content-center" data-aos="fade-up">
                    <div class="col-lg-9">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Specifications</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Product Sheet</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Enquire / Customize</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab4">Shipping</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab5">Clean and Care</a>
                            </li>
                        </ul>
                        <!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                {{ $product->short_description }}
                            </div>
                            <!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">
                                {{ $product->product_sheet }}
                            </div>
                            <!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">
                                <div class="mx-5">
                                    <div class="form-group mt-2">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleFormControlInput1">Phone</label>
                                        <input type="contact" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleFormControlInput1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <button class="btn btn-contact" style="width: unset">
                                            Contact
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="tab4">
                                {{ $product->long_description }}
                            </div>
                            <div class="tab-pane fade show" id="tab5">
                                {{ $product->clean_and_care }}
                            </div>
                            <!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
                <!-- End Feature Tabs -->
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Recoment products Section ======= -->
        <section class="popular pt-5">
            <div class="container" data-aos="fade-up">
                <dv class="row justify-content-center">
                    <div class="col-md-9">
                        <header class="text-center mb-3">
                            <h3 class="mb-0">YOU MAY ALSO LIKE...</h3>
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
                        @foreach ($suggestions as $suggestion)
                            <div class="swiper-slide col-lg-3">
                                <div class="card">
                                    <div class="card-img">
                                        <div class="wishlist">
                                            <button>
                                                <i class="bi bi-heart"></i>
                                                <i class="bi bi-heart-fill d-none"></i>
                                            </button>
                                        </div>
                                        <img src="{{ asset('storage/images/' . $suggestion->feature_image) }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <a href="#">
                                            <p>{{ $suggestion->title }}</p>
                                            <p><span>{{ $product->variant->count() > 1 ? Config::get('app.currency_code') . $product->variant->min('sales_price') . ' - ' . Config::get('app.currency_code') . $product->variant->max('sales_price') : Config::get('app.currency_code') . $product->variant->min('sales_price') }}</span>
                                            </p>
                                        </a>
                                    </div>
                                    <a href="{{ route('view-item', $suggestion->product_id) }}"
                                        class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach

                        <!-- End product item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End  Section -->

    </main>
    <!-- End #main -->
@endsection

@push('scripts')
    <script>
        let productId = "{{ $product->product_id }}";
        let productType = "{{ $product->product_type }}";
        let variantId = null;
        let price = null;

        $('#size').on('change', function() {
            $('#finishes').removeClass('d-none');
            updatePrice();
        });

        $('.variation').on('change', function() {
            $(this).parent().parent().parent().parent().find('.variations').html($(this).data('name'));
            updatePrice();
        });

        function updatePrice() {
            price = $('#size').find(':selected').data('price');
            $("input[type='radio'].variation:checked").each(function() {
                let percentage = $(this).data("percentage");
                price = price + percentage * price / 100;
            });
            $('#price').html('{{ Config::get('app.currency_code') }}' + price.toFixed(2));
            $('#total_price').val(price);
        }

        $('.variation').click(function(e) {
            let price = $(this).data('price');
            let variant = $(this).data('variant');
            variantId = $(this).data('variant_id');
            $(this).addClass('active');
            $('#price').html(price);
            $('#variations').html(variant);
        });

        $('#add-to-cart').click(function() {
            if (variantId == null && productType == 'variant') {
                message('warning', 'Please select a variant');
            } else {
                let qty = $('.qty').val();
                let form=$("#product-form");
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: "{{ route('add-to-cart') }}",
                    method: "POST",
                    data: form.serialize(),
                    success: function(data) {
                        message(data.icon, data.title);
                    },
                    error: function(response) {
                        if (response.status == 401) {
                            window.location.replace("{{ route('customer-login') }}");
                        } else {
                            message('warning', 'Something went wrong');
                        }
                    }
                });
            }

            function message(icon, message) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: icon,
                    title: message,
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'colored-toast'
                    },
                });
            }
        });
    </script>
@endpush
