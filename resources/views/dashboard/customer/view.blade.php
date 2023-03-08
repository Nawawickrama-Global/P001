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
    <h4 class="mb-3 mb-md-0">Customer</h4>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Customer List</h6>
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
                  Contact
                </th>
                <th>
                  Address
                </th>
                <th>
                  Spent
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
              @foreach ($customers as $key => $customer)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->contact }}</td>
                <td>{{ $customer->address }}</td>
                <td>
                  50,000LKR
                </td>
                <td>
                  <span class="badge badge-primary">Active</span>
                  {{-- <span class="badge badge-danger">deative</span> --}}
                </td>
                <td>
                  {{-- report view --}}
                  <button type="button" class="btn btn-info btn-sm btn-icon" title="Info" >
                    <i data-feather="file-text"></i>
                  </button>
                  {{-- view --}}
                  <button type="button" class="btn btn-warning btn-sm btn-icon" title="View">
                    <i data-feather="eye"></i>
                  </button>
                  {{-- edit --}}
                  <a type="button" class="btn btn-success btn-sm btn-icon" title="Edit" href="{{ route('edit-customer', $customer->customer_id) }}">
                    <i data-feather="edit"></i>
                  </a>
                  {{-- Delete --}}
                  <form action="{{ route('delete-customer', $customer->customer_id) }}" method="post">
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-danger btn-icon delete mt-2" title="Delete">
                          <i data-feather="trash-2"></i>
                      </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection