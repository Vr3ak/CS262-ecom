@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Login</h2>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('auth.login.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
                <p class="text-center mt-3">Don't have an account? <a href="{{ route('auth.register') }}">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
