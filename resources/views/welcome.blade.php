@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<section class="bg-body-tertiary">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 p-3">
                        <div class="text-center">
                            @if (Session::has('login-success'))
                            <div class="alert alert-login-success text-center text-white bg-green-800 min-w-[100%] mb-3 p-3 rounded">
                                <h3>{{ Session::get('login-success') }}</h3>
                            </div>
                            @endif
                            <h5 class="text-success fw-semibold">
                                {{auth()->user()->name}}
                            </h5>
                            <p class="text-secondary">
                                {{auth()->user()->email}}
                            </p>
                            <a class="btn btn-sm btn-danger" href="{{url('logout')}}">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection