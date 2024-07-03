@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')

<section class="bg-body-tertiary">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 p-3">
                        {{-- @if (Session::has('success'))
                        <div class="alert alert-success text-center text-white bg-green-800 min-w-[100%] mb-3 p-3 rounded">
                            <h3>{{ Session::get('success') }}</h3>
                        </div>
                        @endif --}}
                        <div class="alert alert-success text-center text-white bg-green-800 min-w-[100%] mb-3 p-3 rounded">
                            You are logged in as Administrator!
                        </div>
                        <form action="{{ route('logout') }}" method="post" hx-post="{{ route('logout') }}" hx-trigger="this" hx-swap="outerHTML">
                            @csrf
                            <div class="text-center">
                                <h5 class="text-success fw-semibold">
                                    {{ auth()->user()->name }}
                                </h5>
                                <p class="text-secondary">
                                    {{ auth()->user()->email }}
                                </p>
                                <button class="btn btn-sm btn-danger" type="submit">
                                    Logout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
