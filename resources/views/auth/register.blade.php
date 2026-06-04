@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Sign Up</h2>

            <form action="{{ route('auth.register.store') }}" method="post">
                @csrf
                <div class="mb-3">
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
                <button type="submit" class="btn btn-success w-100">Register</button>
                <p class="text-center mt-3">Already have an account? <a href="{{ route('auth.login') }}">Login</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
