@extends('admin.layout-admin')
@section('content')
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4 mt-5">
                <div class="card shadow-sm border-2">
                    <div class="card-header text-center py-3 text-success border border-light ">
                        <i class="bi bi-person-square fs-3 d-block mb-2"></i>
                        <h4 class="mb-2">Welcome Back, {{ auth()->user()->name }}</h4>
                        <p class="text-secondary">Manage Your Webpage Here</p>
                    </div>
                    <div class="row align-items-start card-body p-4 text-center">
                        <div class="col border-end border-2 border-success">
                            <a href="{{ route('users.index') }} " class="text-success text-decoration-none fw-bold">Manage Users</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('products.index') }}" class="text-success text-decoration-none fw-bold">Manage Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection