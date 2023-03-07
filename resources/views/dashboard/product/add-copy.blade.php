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
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Add New Product</h6>
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Stock</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Sales Price</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Reguler Price</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">SKU</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Feature Image</label>
              <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Short Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="ActivityStatus">Status</label>
              <select class="form-control">
                <option>Active</option>
                <option>Deactive</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Product Image</label>
              <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Long Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Category</label>
              <input name="tags" id="tags" value="Mobile" />
            </div>
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Add</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->


@endsection