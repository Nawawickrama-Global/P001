@extends('layouts.dashboard.main')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Attribute</h4>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Add New Attribute</h6>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="ActivityStatus">Status</label>
              <select class="form-control">
                <option>Active</option>
                <option>Deactive</option>
              </select>              
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Values</label>
              <input name="tags" id="tags" value="Red,Green,Blue" />
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

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Attribute List</h6>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Value
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  color
                </td>
                <td>
                  Red, Green, Blue
                </td>
                <td>
                  <span class="badge badge-primary">Active</span>
                  {{-- <span class="badge badge-danger">deative</span> --}}
                </td>
                <td>
                  {{-- view --}}
                  <button type="button" class="btn btn-warning btn-sm btn-icon"title="View">
                    <i data-feather="eye"></i>
                  </button>
                  {{-- edit --}}
                  <button type="button" class="btn btn-success btn-sm btn-icon" title="Edit">
                    <i data-feather="edit"></i>
                  </button>
                  {{-- Delete --}}
                  <button type="button" class="btn btn-danger btn-sm btn-icon" title="Delete">
                    <i data-feather="trash-2"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection