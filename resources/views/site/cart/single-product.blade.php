@extends('site.layout.auth')
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
                                <img src="{{ asset('storage/images/' . $product->feature_image) }}" class="d-block w-100"
                                    alt="variant" />
                            </div>
                            @foreach ($product->variant as $variant)
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/images/' . $variant->image) }}" class="d-block w-100"
                                        alt="variant" />
                                </div>
                            @endforeach
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
                            @foreach ($product->variant as $variant)
                                <div class="thumbnail" data-target="#productCarousel" data-slide-to="0">
                                    <img src="{{ asset('storage/images/' . $variant->image) }}" class="d-block w-100" />
                                </div>
                            @endforeach
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
                                        {{ $product->product_type == 'single' ? Config::get('app.currency_code') . $product->sale_price : Config::get('app.currency_code') . $product->variant->min('sales_price') . ' - ' . Config::get('app.currency_code') . $product->variant->max('sales_price') }}
                                    </span>
                                </strong>
                            </div>

                            <div class="_p-features">
                                {{ $product->long_description }}
                            </div>

                            <div class="color bb pb-3 mt-5">
                                <p><strong>Finishes : </strong> <span id="variations"></span></p>
                                <div class="row">
                                    @foreach ($product->variant as $variant)
                                        <div class="col-lg-2 mt-2">
                                            <button class="variation" data-variant_id="{{ $variant->variant_id }}"
                                                data-price="{{ Config::get('app.currency_code') . $variant->sales_price }}"
                                                data-variant="
                         @foreach ($variant->productAttr as $key => $attribute)
                           {{ $attribute->attribute->name . ' ' . $attribute->value }}
                           @if (count($variant->productAttr) != $key + 1)
                              {{ ', ' }}
                           @endif @endforeach 
                          ">
                                                <img src="{{ asset('storage/images/' . $variant->image) }}" alt="Color"
                                                    class="img-fluid" />
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="_p-qty-and-cart mt-4 d-flex">
                                <div class="_p-add-cart">
                                    <div class="_p-qty">
                                        <span>Qty:</span>

                                        <input type="number" class="qty" name="qty" id="number" value="1" />
                                    </div>
                                </div>
                                <button class="btn btn-buy" tabindex="0">
                                    <i class="fa fa-shopping-cart"></i> Buy Now
                                </button>
                                <button class="btn btn-cart" id="add-to-cart" tabindex="0">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
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
                        </ul>
                        <!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <ul>
                                    <li>MATERIAL:</li>
                                    <li>Brass FINISHES:</li>
                                    <li>
                                        Gold Plated ( Also available in Aged & Brushed Brass)
                                    </li>
                                    <li>DIMENSIONS: Height: 50 mm | 1,97 in</li>
                                    <li>Length: 150 mm | 59,06 in</li>
                                    <li>Depth: 60 mm | 23,62 in</li>
                                    <li>WEIGHT: 392 g / 0,86 Lbs</li>
                                </ul>
                            </div>
                            <!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">
                                <p>
                                    Consequuntur inventore voluptates consequatur aut vel et.
                                    Eos doloribus expedita. Sapiente atque consequatur minima
                                    nihil quae aspernatur quo suscipit voluptatem.
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>
                                        Repudiandae rerum velit modi et officia quasi facilis
                                    </h4>
                                </div>
                                <p>
                                    Laborum omnis voluptates voluptas qui sit aliquam
                                    blanditiis. Sapiente minima commodi dolorum non eveniet
                                    magni quaerat nemo et.
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                </div>
                                <p>
                                    Non quod totam minus repellendus autem sint velit. Rerum
                                    debitis facere soluta tenetur. Iure molestiae assumenda sunt
                                    qui inventore eligendi voluptates nisi at. Dolorem quo
                                    tempora. Quia et perferendis.
                                </p>
                            </div>
                            <!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">
                                <p>
                                    Consequuntur inventore voluptates consequatur aut vel et.
                                    Eos doloribus expedita. Sapiente atque consequatur minima
                                    nihil quae aspernatur quo suscipit voluptatem.
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>
                                        Repudiandae rerum velit modi et officia quasi facilis
                                    </h4>
                                </div>
                                <p>
                                    Laborum omnis voluptates voluptas qui sit aliquam
                                    blanditiis. Sapiente minima commodi dolorum non eveniet
                                    magni quaerat nemo et.
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check2"></i>
                                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                </div>
                                <p>
                                    Non quod totam minus repellendus autem sint velit. Rerum
                                    debitis facere soluta tenetur. Iure molestiae assumenda sunt
                                    qui inventore eligendi voluptates nisi at. Dolorem quo
                                    tempora. Quia et perferendis.
                                </p>
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
                                            <p><span>{{ $suggestion->product_type == 'single' ? Config::get('app.currency_code') . $suggestion->sale_price : Config::get('app.currency_code') . $suggestion->variant->min('sales_price') . ' - ' . Config::get('app.currency_code') . $suggestion->variant->max('sales_price') }}</span>
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
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: "{{ route('add-to-cart') }}",
                    method: "POST",
                    data: {
                        productId: productId,
                        variantId: variantId,
                        qty: qty
                    },
                    success: function(data) {
                        message(data.icon, data.title);
                    },
                    error: function(response) {
                        if(response.status == 401){
                            window.location.replace("{{ route('customer-login') }}");
                        }else{
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
