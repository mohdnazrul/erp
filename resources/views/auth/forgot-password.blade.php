@extends('auth.layout.app')

@section('content')
    <div class="container-fluid login-container" style="min-height: 100vh;">
        <div class="row">
            <!-- Left Side: Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 px-lg-5 px-4 py-4" style="max-width: 420px;">
                    <h3 class="mb-3 fw-bold">Password Reset 🔐</h3>
                    <p class="text-muted mb-4">Regain access to your account and stay on top of your tasks.</p>

                    {{-- Success / status (Fortify sets this after sending reset link) --}}
                    @if (session('status'))
                        <div class="alert alert-success mb-3" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger mb-3" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Forgot Password Form (Fortify POST /forgot-password) -->
                    <form method="POST" action="{{ url('/forgot-password') }}">
                        @csrf

                        <div class="mb-3 control-group">
                            <label class="form-label">Email Address</label>
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                autocomplete="username"
                                required
                                autofocus
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" title="Reset Password" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <span class="text-muted">Remember your password? </span>
                        <a href="{{ route('login') }}" aria-label="Sign In">Sign In</a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Image Slider -->
            <div class="col-lg-6 d-none d-lg-block p-0 overflow-hidden">
                <div class="d-flex justify-content-start">
                    <img style="object-fit: cover; height: 100vh;"
                         src="{{ asset('assets/images/login-image.png') }}"
                         alt="Forgot password image">
                </div>
            </div>
        </div>
    </div>
@endsection
