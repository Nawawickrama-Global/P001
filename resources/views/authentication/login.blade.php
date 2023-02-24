@extends('layouts.auth.main')

@section('content')
<div class="col-md-8 pl-md-0">
    <div class="auth-form-wrapper px-4 py-5">
        <a href="#" class="noble-ui-logo d-block mb-2">Kelani<span> Institute</span></a>
        <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile number</label>
                <input id="phone" type="text" class="form-control" name="email"  required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
            </div>
            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    Remember me
                </label>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark mr-2 mb-2 mb-md-0 text-white">Login to portal</button>
            </div>
            <br><br><br>
        </form>
    </div>
</div>
@endsection