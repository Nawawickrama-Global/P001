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
        <h4 class="mb-3 mb-md-0">Variations</h4>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <p>Add Attribute</p>
    </div>
    <div class="card-body">
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Attribute :</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Sinthetic Leather" disabled>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Variation Name :</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Price Presentage :</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="formFile">Upload an image for variation :</label>
                        <input class="form-control-file" type="file" id="formFile">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Add Attribute</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card mt-4">
    <div class="card-header">
        <p>Attribute List</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Presentage (%)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Senthatic Leather</td>
                        <td>This is very unique leather</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm btn-icon" title="View Image">
                                <i data-feather="eye"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm btn-icon" title="Edit">
                                <i data-feather="edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon" title="Delete">
                                <i data-feather="trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection