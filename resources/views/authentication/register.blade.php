@extends('layouts.auth.main')

@section('content')
<div class="col-md-8 pl-md-0">
    <div class="auth-form-wrapper px-4 py-5">
    <a href="#" class="noble-ui-logo d-block mb-2">Kelani<span> Institute</span></a>
        <h5 class="text-muted font-weight-normal mb-4">Welcome, and please create your account.</h5>
        <form method="POST" action="#">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">First name</label>
                    <input id="fname" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Last name</label>
                    <input id="lname" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Contact number</label>
                    <input id="contact" type="number" class="form-control" name="email" required autocomplete="email" autofocus>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">National identity card (NIC) number</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Confirm password</label>
                    <input id="confirmpassword" type="password" class="form-control" name="password" required autocomplete="current-password">
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark mr-2 mb-2 mb-md-0 text-white">Register Now</button>
            </div>
        </form>
    </div>
</div>
@endsection