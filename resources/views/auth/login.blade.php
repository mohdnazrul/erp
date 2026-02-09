@extends('auth.layout.app')

@section('content')
    <div class="container-fluid login-container" style="min-height: 100vh;">
        <div class="row">
            <!-- Left Side: Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 px-lg-5 px-4 py-4" style="max-width: 420px;">
                    <h3 class="mb-3 fw-bold">Welcome Back 👋</h3>
                    <p class="text-muted mb-4">Login to your account to continue</p>

                    {{-- Success / status message (e.g. password reset link sent, email verified etc.) --}}
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

                    <!-- Google / Apple Sign In (UI only - wire to Socialite later) -->
                    <div class="d-grid gap-2 mb-3">
                       <a href="{{ route('google.redirect') }}" class="btn btn-outline-dark d-flex align-items-center justify-content-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2a9.96 9.96 0 0 1 6.29 2.226a1 1 0 0 1 .04 1.52l-1.51 1.362a1 1 0 0 1 -1.265 .06a6 6 0 1 0 2.103 6.836l.001 -.004h-3.66a1 1 0 0 1 -.992 -.883l-.007 -.117v-2a1 1 0 0 1 1 -1h6.945a1 1 0 0 1 .994 .89c.04 .367 .061 .737 .061 1.11c0 5.523 -4.477 10 -10 10s-10 -4.477 -10 -10s4.477 -10 10 -10z" />
                            </svg>
                            <span>Sign in with Google</span>
                        </a>
                        {{-- <button type="button" class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M15.079 5.999l.239 .012c1.43 .097 3.434 1.013 4.508 2.586a1 1 0 0 1 -.344 1.44c-.05 .028 -.372 .158 -.497 .217a4.15 4.15 0 0 0 -.722 .431c-.614 .461 -.948 1.009 -.942 1.694c.01 .885 .339 1.454 .907 1.846c.208 .143 .436 .253 .666 .33c.126 .043 .426 .116 .444 .122a1 1 0 0 1 .662 .942c0 2.621 -3.04 6.381 -5.286 6.381c-.79 0 -1.272 -.091 -1.983 -.315l-.098 -.031c-.463 -.146 -.702 -.192 -1.133 -.192c-.52 0 -.863 .06 -1.518 .237l-.197 .053c-.575 .153 -.964 .226 -1.5 .248c-2.749 0 -5.285 -5.093 -5.285 -9.072c0 -3.87 1.786 -6.92 5.286 -6.92c.297 0 .598 .045 .909 .128c.403 .107 .774 .26 1.296 .508c.787 .374 .948 .44 1.009 .44h.016c.03 -.003 .128 -.047 1.056 -.457c1.061 -.467 1.864 -.685 2.746 -.616l-.24 -.012z" />
                                <path d="M14 1a1 1 0 0 1 1 1a3 3 0 0 1 -3 3a1 1 0 0 1 -1 -1a3 3 0 0 1 3 -3z" />
                            </svg>
                            Sign in with Apple
                        </button> --}}
                    </div>

                    <div class="text-center my-4">
                        <span class="text-muted opacity-50">or continue with email</span>
                    </div>

                    <!-- Login Form (Fortify POST /login) -->
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf

                        <div class="mb-3 control-group">
                            <label class="form-label">Email address</label>
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

                        <div class="mb-3 control-group">
                            <div class="d-flex justify-content-between">
                                <label class="form-label">Password</label>
                                <a href="{{ route('forgot-password') }}" aria-label="Forgot password?" class="small text-primary">
                                    Forgot password?
                                </a>
                            </div>

                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="••••••••"
                                autocomplete="current-password"
                                required
                            >

                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary" title="login">
                                Login
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <span class="text-muted">Don't have an account? </span>
                        <a href="{{ route('register') }}" aria-label="Create an account">Create an account</a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Image Slider -->
            <div class="col-lg-6 d-none d-lg-block p-0 overflow-hidden">
                <div class="d-flex justify-content-start">
                    <img style="object-fit: cover; height: 100vh;"
                         src="{{ asset('assets/images/login-image.png') }}"
                         alt="Login image">
                </div>
            </div>
        </div>
    </div>
@endsection
