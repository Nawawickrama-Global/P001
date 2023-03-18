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
            <h4 class="mb-3 mb-md-0">Attribute</h4>
        </div>
    </div>
    <form action="{{ route('create-attribute') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">Add New Attribute</h6>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input id="phone" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        autocomplete="email" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="ActivityStatus">Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
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
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="ActivityStatus">Type</label>
                                    <select class="form-control" name="status">
                                        <option value="image">Image</option>
                                        <option value="color">Color</option>
                                        <option value="text">Text</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                    <input id="phone" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Value"
                                        autocomplete="email" autofocus>
                            </div>
                            <div class="col-5">
                                    <input id="phone" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Color/Image"
                                        autocomplete="email" autofocus>
                            </div>
                            <div class="col-2 text-right">
                                <button type="submit" id="add-btn"
                                        class="btn btn-danger mb-2 mb-md-0 text-white">Remove</button>
                                        <button type="submit" id="add-btn"
                                        class="btn btn-primary mb-2 mb-md-0 text-white">Add New</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" id="add-btn"
                                        class="btn btn-primary my-4 mb-2 mb-md-0 text-white">Save Attribute</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </form>

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
                              @foreach ($attributes as $key => $attribute)
                              <tr>
                                <td>
                                    {{ $key+1}}
                                </td>
                                <td>
                                    {{ $attribute->name }}
                                </td>
                                <td>
                                    {{ $attribute->values }}
                                </td>
                                <td>
                                  @if ($attribute->status == 'active')
                                  <span class="badge badge-primary">Active</span>
                                  @else
                                  <span class="badge badge-danger">Deative</span>
                                  @endif
                                </td>
                                <td>
                                    <table>
                                        <tr style="border: 0">
                                            <td style="padding:0 2px ; border: 0">
                                                {{-- edit --}}
                                                <button type="button" class="btn btn-success btn-sm btn-icon" title="Edit">
                                                    <i data-feather="edit"></i>
                                                </button>
                                            </td>
                                            <td style="padding:0 2px ; border: 0">
                                                {{-- Delete --}}
                                                <form action="{{ route('delete-attribute', $attribute->attribute_id) }}" method="post">
                                                  @csrf
                                                  @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-icon delete" title="Delete">
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td style="padding:0 2px ; border: 0">
                                                <button type="button"
                                                data-toggle="modal"
                                                data-target="#viewModal"
                                                    class="btn btn-warning btn-sm btn-icon view" title="View">
                                                    <i data-feather="eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
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
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <span id="view-name">Name</span>
                                        <span id="view-status" class="badge badge-primary mx-3">Active</span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>
                                                Value
                                            </th>
                                            <th>
                                                Image/Color 
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                Red
                                            </td>
                                            <td class="text-center">
                                                {{-- pass same variacle to color and background color --}}
                                                <span style="color:red; background-color:red" class="p-2" >x</span>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-icon delete" title="Delete">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Red
                                            </td>
                                            <td class="text-center">
                                                <img src="" alt="" srcset="" height="10" width="10">
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-icon delete" title="Delete">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
