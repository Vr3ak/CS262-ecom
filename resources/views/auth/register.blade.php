@extends('layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 mt-5">

            {{-- Icon --}}
            <div class="text-center mb-3">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success mb-3" style="width:64px; height:64px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 24 24">
                        <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <h4 class="fw-bold text-success">Create Account</h4>
                <p class="text-muted small">Enter your details to register</p>
            </div>

            <form>
                {{-- Full Name --}}
                <label class="form-label small fw-semibold">Full Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light border-end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
                    </span>
                    <input type="text" class="form-control bg-light border-start-0" placeholder="">
                </div>

                {{-- Email --}}
                <label class="form-label small fw-semibold">Email Address</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light border-end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="gray" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/></svg>
                    </span>
                    <input type="email" class="form-control bg-light border-start-0" placeholder="">
                </div>

                {{-- Password --}}
                <label class="form-label small fw-semibold">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light border-end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="gray" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </span>
                    <input type="password" class="form-control bg-light border-start-0" placeholder="">
                </div>

                {{-- Confirm Password --}}
                <label class="form-label small fw-semibold">Confirm Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-light border-end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="gray" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </span>
                    <input type="password" class="form-control bg-light border-start-0" placeholder="">
                </div>

                {{-- Terms --}}
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms">
                    <label class="form-check-label small" for="terms">
                        I agree to the <span class="text-success">Terms</span> and <span class="text-success">Privacy Policy</span>
                    </label>
                </div>

                                {{-- Submit --}}
                <button type="button" class="btn btn-success w-100 py-2 fw-semibold">
                    Register &rarr;
                </button>
            </form>

            <hr class="my-4">

            <p class="text-center small mb-3">
                Already have an account? <span class="text-success fw-bold" style="cursor:pointer;">Log In</span>
            </p>

        </div>
    </div>
</div>
@endsection