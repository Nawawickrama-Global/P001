@extends('layouts.auth.main')

@section('content')
<div class="col-md-8 pl-md-0">
    <div class="auth-form-wrapper px-4 py-5">
        <a href="#" class="noble-ui-logo d-block mb-2">Kelani<span> Institute</span></a>
        <h5 class="text-muted font-weight-normal mb-4">Please enter the following details to set a new password.</h5>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Verification code</label>
                <input id="verification" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">New password</label>
                <input id="password" type="password" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Confirm new password</label>
                <input id="confirmpassword" type="password" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark mr-2 mb-2 mb-md-0 text-white">Setup Password</button>
            </div>
        </form>
    </div>
</div>
@endsection