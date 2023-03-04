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
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <h6 class="card-title">Edit Customer</h6>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input id="phone" type="text" class="form-control" name="email" required
                                autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact</label>
                            <input id="phone" type="text" class="form-control" placeholder="" name="email" required
                                autocomplete="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input id="email" type="text" class="form-control" placeholder="" name="email" required
                                autocomplete="" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name</label>
                            <input id="phone" type="number" class="form-control" name="email" required
                                autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Addrss</label>
                            <input id="text" type="text" class="form-control" name="email" required autocomplete="email"
                                autofocus>
                        </div>
                        <div class="form-group">
                            <label for="ActivityStatus">Status</label>
                            <select class="form-control">
                                <option>Active</option>
                                <option>Deactive</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Save</button>
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
                <h6 class="card-title">Purchased History</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    SKU
                                </th>
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    Reguler Price
                                </th>
                                <th>
                                    Real Price
                                </th>
                                <th>
                                    Category
                                </th>
                                <th>
                                    Purchased
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
                                    Nokia 3.1
                                </td>
                                <td>
                                    20-ABC-12
                                </td>
                                <td>
                                    25
                                </td>
                                <td>
                                    150,000
                                </td>
                                <td>
                                    2023/04/12
                                </td>
                                <td>
                                    160,000
                                </td>
                                <td>
                                    Mobile, Nokia
                                </td>
                                <td>
                                    <span class="badge badge-primary">Delivered</span>
                                    {{-- <span class="badge badge-danger">deative</span> --}}
                                </td>
                                <td>
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection