@extends('layouts.app')
@section('title', 'Login')
@section('content')

<section class="bg-body-tertiary">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-3 px-4">
                        @if (Session::has('logout-success'))
                        <div class="alert alert-success text-center text-white bg-green-800 min-w-[100%] mb-3 p-3 rounded">
                            <h3>{{ Session::get('logout-success') }}</h3>
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-error text-center text-white bg-red-800 min-w-[100%] mb-3 p-3 rounded">
                            <h3>{{ Session::get('error') }}</h3>
                        </div>
                        @endif
                        <div class="text-center py-2 mb-3">
                            <p class="mb-0 text-uppercase fw-bold text-secondary">
                                Welcome Back
                            </p>
                        </div>
                        <form class="row gy-3" hx-post="/login" method="post" hx-target="this" hx-swap="outerHTML">
                            @csrf
                            <div class="col-12">
                                <label for="emailInp" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailInp" name="email"
                                    value="{{old('email')}}">
                                @error('email')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-12">
                                <label for="passInp" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passInp" name="password">
                                @error('password')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection