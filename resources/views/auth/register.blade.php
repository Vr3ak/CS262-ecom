@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card shadow-sm border-0">

                <div class="card-header text-center py-3 text-success border border-light">
                    <i class="bi bi-person-fill-add fs-3 d-block mb-2"></i>
                    <h4 class="mb-2">Create Account</h4>
                    <p class="text-secondary">Enter your detials to register</p>
                </div>
                <div class="card-body p-4">

                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="{{ route('auth.register.store') }}" method="post">
                        @csrf
                        <div class="mb-3 mt-4">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Repeat Password</label>
                            <input type="password" name="password_confirmation" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>

                </div>
                <div class="card-footer text-center text-muted py-3 border border-light">
                    Already have an account? <a href="{{ route('auth.login') }}" class="text-success">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
