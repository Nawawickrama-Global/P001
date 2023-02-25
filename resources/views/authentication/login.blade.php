@extends('layouts.auth.main')

@section('content')
<div class="col-md-8 pl-md-0">
    <div class="auth-form-wrapper px-4 py-5">
        <a href="#" class="noble-ui-logo d-block mb-2">My<span> Mobile</span></a>
        <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input id="phone" type="text" class="form-control" name="email"  required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login to portal</button>
            </div>
            <div class="form-group">
                <hr class="mt-2">
                <label class="form-check-label text-muted font-weight-normal">
                    <a href="/forget-password">
                        Forget Password ?
                    </a>
                </label>
            </div>
        </form>
    </div>
</div>
@endsection