@extends('layouts.auth.main')

@section('content')
<div class="col-md-8 pl-md-0">
    <div class="auth-form-wrapper px-4 py-5">
        <a href="#" class="noble-ui-logo d-block mb-2">Kelani<span> Institute</span></a>
        <h5 class="text-muted font-weight-normal mb-4">Please enter your mobile number (071*****93 ) to reset your password.</h5>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input id="phone" type="text" class="form-control" name="phone" required autocomplete="email" autofocus placeholder="07XXXXXXXX">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark mr-2 mb-2 mb-md-0 text-white">Reset Password</button>
            </div>
            <br><br><br><br><br><br>
        </form>
    </div>
</div>
@endsection