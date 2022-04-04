@extends('layouts.app_plain')
@section('title','Login')
@section('extra_css')
<style>

</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height:100vh;">
        <div class="col-md-6">
            <div class="card">


                <div class="card-body">
                    <h5>Login</h5>
                    <p class="text-muted mb-0">Please fill the login form</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="md-form">
                            <label for="">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="md-form">
                            <label for="">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  required>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Login

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
