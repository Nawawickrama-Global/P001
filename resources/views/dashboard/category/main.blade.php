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
    <h4 class="mb-3 mb-md-0">Category</h4>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Add New Category</h6>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
              <label for="ActivityStatus">Status</label>
              <select class="form-control">
                <option>Active</option>
                <option>Deactive</option>
              </select>              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Select Parent Category</label>
              <select class="form-control">
                <option default>None</option>
                <option>Category 01</option>
                <option>Category 02</option>
              </select> 
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Select Category Image</label>
              <input type="file" id="myDropify" class="border" style="height: 300px"/>
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
        <h6 class="card-title">Category List</h6>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Category Name
                </th>
                <th>
                  Description
                </th>
                <th>
                  Parent
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
                  Mobile Phone
                </td>
                <td>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aut maiores consequuntur unde aliquid
                </td>
                <td>
                  none
                </td>
                <td>
                  <span class="badge badge-primary">Active</span>
                  {{-- <span class="badge badge-danger">deative</span> --}}
                </td>
                <td>
                  {{-- view --}}
                  <a type="button" class="badge badge-warning" data-toggle="modal" data-target="#exampleModal" title="View">
                    <i data-feather="eye"></i>
                  </a>
                  {{-- edit --}}
                  <a type="button" class="badge badge-success" title="Edit">
                    <i data-feather="edit"></i>
                  </a>
                  {{-- Delete --}}
                  <a type="button" class="badge badge-danger" title="Delete">
                    <i data-feather="trash-2"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mobile Phone 
                  <span class="badge badge-primary mx-3">Active</span>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aut maiores consequuntur unde aliquid
                  <hr class="my-2">
                  None
                  <hr class="my-2">
                  <img src="{{asset('assets/images/placeholder.jpg')}}" alt="display relavant image on here" style="width: 100%;">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success">Edit</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection