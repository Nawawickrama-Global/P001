@extends('layouts.dashboard.main')

@push('plugin-styles')
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
    <h4 class="mb-3 mb-md-0">Coupon</h4>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Add New Coupon</h6>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Value</label>
              <input id="phone" type="text" class="form-control" placeholder="Ex: 500.00 LKR / 25%" name="email"
                required autocomplete="" autofocus>
            </div>
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
              <label for="exampleInputPassword1">Number of users</label>
              <input id="phone" type="number" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Start Date</label>
              <input id="phone" type="date" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">End Date</label>
              <input id="phone" type="date" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="form-group">
              <label for="ActivityStatus">Type</label>
              <select class="form-control">
                <option>Percentage</option>
                <option>Fixed</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Start Time</label>
              <input id="phone" type="time" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">End Time</label>
              <input id="phone" type="time" class="form-control" name="email" required autocomplete="email" autofocus>
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
        <h6 class="card-title">Coupon List</h6>
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
                  Number of Users
                </th>
                <th>
                  Used
                </th>
                <th>
                  Type
                </th>
                <th>
                  Value
                </th>
                <th>
                  Start
                </th>
                <th>
                  End
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
                  BlackFriday
                </td>
                <td>
                  20
                </td>
                <td>
                  12
                </td>
                <td>
                  Percentage
                </td>
                <td>
                  20%
                </td>
                <td>
                  2023-05-12 | 06:00 PM
                </td>
                <td>
                  2023-05-14 | 12:00 PM
                </td>
                <td>
                  <span class="badge badge-primary">Active</span>
                  {{-- <span class="badge badge-danger">deative</span> --}}
                </td>
                <td>
                  {{-- report view --}}
                  <button type="button" class="btn btn-info btn-sm btn-icon" title="View" data-toggle="modal"
                    data-target="#exampleModal">
                    <i data-feather="file-text"></i>
                  </button>
                  {{-- view --}}
                  <button type="button" class="btn btn-warning btn-sm btn-icon" title="View">
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
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5>Black Friday
                  <span class="badge badge-primary mx-3">Active</span>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Customer Name
                          </th>
                          <th>
                            Products
                          </th>
                          <th>
                            Spent
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
                            John Doe
                          </td>
                          <td>
                            Charger, Handfree
                          </td>
                          <td>
                            100,000
                          </td>
                          <td>
                            {{-- view --}}
                            {{-- redirect to user bill --}}
                            <a type="button" class="badge badge-warning" title="View Bill">
                              <i data-feather="eye"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="modal-footer">
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