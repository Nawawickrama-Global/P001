@extends('layouts.dashboard.main')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />
@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Product</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0 text-light" href="./view-product">
                <i class="btn-icon-prepend" data-feather="list"></i>
                View Products
            </a>
        </div>
    </div>
    <form action="{{ route('add-new-product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">Add Product</h6>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input value="{{ old('title')}} " value="{{ old('title')}} " id="phone" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        autocomplete="email" autofocus>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SKU</label>
                                    <input value="{{ old('sku')}} " id="phone" type="text"
                                        class="form-control @error('sku') is-invalid @enderror" name="sku"
                                        autocomplete="email" autofocus>
                                    @error('')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Type</label>
                                    <select name="product_type" id="product_type"
                                        class="form-control @error('type') is-invalid @enderror">
                                        <option value="single">Single</option>
                                        <option value="variant">Varient</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Feature Image</label>
                                    <input value="{{ old('feature_img')}} " type="file" name="feature_img" id="myDropify"
                                        class="border @error('feature_img') is-invalid @enderror" style="height: 300px" />
                                    @error('feature_img')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Short Description</label>
                                    <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror"
                                        id="exampleFormControlTextarea1" rows="5">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ActivityStatus">Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="active">Active</option>
                                        <option value="inactive">Deactive</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Product Image</label>
                                    <input value="{{ old('title')}} " type="file" name="product_img" 
                                        class="dropify border @error('product_img') is-invalid @enderror" style="height: 300px" />
                                    @error('product_img')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Long Description</label>
                                    <textarea name="long_description" class="form-control @error('title') is-invalid @enderror"
                                        id="exampleFormControlTextarea1" rows="5">{{ old('long_description') }}</textarea>
                                    @error('long_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Brand</label>
                                            <select name="brand_id" id="multiple"
                                                class="@error('brand_id') is-invalid @enderror">
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->brand_id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Category</label>
                                            <select name="sub_category_id" id="multiple"
                                                class="@error('category_id') is-invalid @enderror">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->sub_category_id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('sub_category_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="single-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reguler Price</label>
                                    <input value="{{ old('regular_price')}} " id="phone" type="text"
                                        class="form-control @error('regular_price') is-invalid @enderror"
                                        name="regular_price" autocomplete="email" autofocus>
                                    @error('regular_price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sale Price</label>
                                    <input value="{{ old('sale_price')}} " id="phone" type="text"
                                        class="form-control @error('sale_price') is-invalid @enderror" name="sale_price"
                                        autocomplete="email" autofocus>
                                    @error('sale_price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stock</label>
                                    <input value="{{ old('stock')}} " id="phone" type="text"
                                        class="form-control @error('stock') is-invalid @enderror" name="stock"
                                        autocomplete="email" autofocus>
                                    @error('stock')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row d-none" id="attribute-area">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">Select Attributes</h6>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    @foreach ($attributes as $attribute)
                                        <button type="button" data-id="{{ $attribute->attribute_id }}"
                                            data-attributes="{{ $attribute->values }}"
                                            class="btn btn-outline-primary attribute"
                                            onclick="toggleButtonStyle(this)">{{ $attribute->name }}</button>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none" id="varriant-area">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                            <div>
                                <h6 class="card-title">Product Variations</h6>
                            </div>
                            <div class="d-flex align-items-center flex-wrap text-nowrap">
                                <button type="button" class="btn btn-primary btn-icon-text mb-md-0 add-variant">
                                    <i class="btn-icon-prepend" data-feather="plus"></i>
                                    Add Varient
                                </button>
                            </div>
                        </div>
                        <div id="form-rows-container">
                            <input type="hidden" id="item-count" name="item_count" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success mr-2 mb-2 mb-md-0 text-white">Reset</button>
                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let att = [];
        let index = 1;
        $('#product_type').on('change', function() {
            if ($(this).val() == 'single') {
                $('#attribute-area').addClass('d-none');
                $('#varriant-area').addClass('d-none');
                $('#single-row').removeClass('d-none');

            } else {
                $('#attribute-area').removeClass('d-none');
                $('#varriant-area').removeClass('d-none');
                $('#single-row').addClass('d-none');
            }
        });

        $('.attribute').click(function() {
            let id = $(this).data('id');
            let attribute = [id, $(this).data('attributes')];
            if (jQuery.inArray(attribute, att) != -1) {
                $(this).removeClass('btn-primary');
                $(this).addClass('btn-outline-primary');
                att = jQuery.grep(att, function(value) {
                    return value != attribute;
                });
            } else {
                $(this).removeClass('btn-outline-primary');
                $(this).addClass('btn-primary');
                att.push(attribute);
            }
        });

        $('.add-variant').click(function() {
            let len = att.length;
            let col = 6 / len;
            let select = '';
            let attribute_count = 0;
            // Select boxes
            $.each(att, function(key, item) {
                op = item[1].split(',');
                select += '<div class="col-md-' + col + '"><select name="attribute' + index + '_' + (key +
                    1) + '">';
                $.each(op, function(key, value) {
                    select += '<option value="' + value + '">' + value + '</option>';
                });
                select += '</select></div><input type="hidden" name="attribute_id' + index + '_' + (key +
                    1) + '" value="' + item[0] + '">';
                attribute_count++;
            });
            select += '<input type="hidden" name="attribute' + index + '-count" value="' + attribute_count + '">';
            // Regular price
            let regularPrice =
                '<div class="col-md-1"><input type="text" placeholder="Regular Price" class="form-control" name="regular_price' +
                index + '"></div>';
            // Sales price
            let salesPrice =
                '<div class="col-md-1"><input type="text" placeholder="Sales Price" class="form-control" name="sales_price' +
                index + '"></div>';
            // Stock price
            let stock =
                '<div class="col-md-1"><input type="text" placeholder="Stock" class="form-control" name="stock' +
                index + '"></div>';
            // Color
            let color =
                '<div class="col-md-1"><input type="color" class="form-control" name="color' + index + '"></div>';
            // Image
            let image =
                '<div class="col-md-1"><input type="file" class="form-control" name="img' + index + '"></div>';
            // remove
            let remove =
                '<div class="col-md-1"><input type="button" data-id="row' + index +
                '" class="form-control btn btn-danger rem" value="REM"></div>';

            $('#form-rows-container').append('<div id="row' + index + '" class="row mb-2">' + select +
                regularPrice + salesPrice + stock + color + image + remove + '</div>');
            $('#item-count').val(index);
            index++;
        });

        $('#form-rows-container').on('click', '.rem', function() {
            $('#' + $(this).data('id')).remove();
            index--;
        });
    </script>
@endpush
