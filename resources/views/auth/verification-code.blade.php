@extends('auth.layout.app')

@section('content')
<div class="container-fluid login-container" style="min-height: 100vh;">
    <div class="row">
        <!-- Left Side: Form -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="w-100 px-lg-5 px-4 py-4" style="max-width: 420px;">
                <h3 class="mb-3 fw-bold">Verify code ✔️</h3>
                <p class="text-muted mb-4">
                    Enter the 6-digit authentication code to continue.
                </p>

                {{-- Status message --}}
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

                {{-- Toggle between code vs recovery code --}}
                <div class="d-flex gap-2 mb-3">
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="use-auth-code-btn">
                        Use authentication code
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="use-recovery-code-btn">
                        Use recovery code
                    </button>
                </div>

                <form method="POST" action="{{ url('/two-factor-challenge') }}" id="twofa-form">
                    @csrf

                    {{-- Authenticator code input --}}
                    <div id="auth-code-wrap">
                        <div class="mb-2 d-flex gap-2">
                            {{-- UI-only 6 boxes (we will combine into hidden "code") --}}
                            @for ($i = 0; $i < 6; $i++)
                                <input
                                    type="text"
                                    inputmode="numeric"
                                    maxlength="1"
                                    class="form-control text-center twofa-digit"
                                    placeholder=""
                                    aria-label="Digit {{ $i + 1 }}"
                                >
                            @endfor
                        </div>

                        {{-- real field Fortify expects --}}
                        <input type="hidden" name="code" id="twofa-code" value="">
                        <small class="text-muted">Tip: you can paste the full 6-digit code.</small>
                    </div>

                    {{-- Recovery code input --}}
                    <div id="recovery-code-wrap" style="display:none;">
                        <div class="mb-3 control-group">
                            <label class="form-label">Recovery Code</label>
                            <input
                                type="text"
                                class="form-control"
                                name="recovery_code"
                                placeholder="Enter your recovery code"
                                autocomplete="one-time-code"
                            >
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <span class="text-muted">Didn’t receive a code?</span>
                    <a href="{{ route('login') }}" aria-label="Back to login">Back to login</a>
                </div>
            </div>
        </div>

        <!-- Right Side: Image Slider -->
        <div class="col-lg-6 d-none d-lg-block p-0 overflow-hidden">
            <div class="d-flex justify-content-start">
                <img style="object-fit: cover; height: 100vh;"
                     src="{{ asset('assets/images/login-image.png') }}"
                     alt="">
            </div>
        </div>
    </div>
</div>

{{-- Small JS to handle 6 boxes -> hidden "code" + paste --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const digits = Array.from(document.querySelectorAll('.twofa-digit'));
    const hidden = document.getElementById('twofa-code');

    const authWrap = document.getElementById('auth-code-wrap');
    const recWrap  = document.getElementById('recovery-code-wrap');

    const useAuthBtn = document.getElementById('use-auth-code-btn');
    const useRecBtn  = document.getElementById('use-recovery-code-btn');

    function syncHidden() {
        hidden.value = digits.map(i => (i.value || '')).join('');
    }

    digits.forEach((input, idx) => {
        input.addEventListener('input', (e) => {
            // allow only digits
            input.value = input.value.replace(/\D/g, '').slice(0, 1);
            syncHidden();
            if (input.value && digits[idx + 1]) digits[idx + 1].focus();
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !input.value && digits[idx - 1]) {
                digits[idx - 1].focus();
            }
        });

        input.addEventListener('paste', (e) => {
            const text = (e.clipboardData || window.clipboardData).getData('text') || '';
            const only = text.replace(/\D/g, '').slice(0, 6);
            if (!only) return;

            e.preventDefault();
            only.split('').forEach((ch, i) => {
                if (digits[i]) digits[i].value = ch;
            });
            syncHidden();
            const last = digits[Math.min(5, only.length - 1)];
            if (last) last.focus();
        });
    });

    // Default focus
    if (digits[0]) digits[0].focus();

    // Toggle modes
    useAuthBtn.addEventListener('click', () => {
        authWrap.style.display = '';
        recWrap.style.display = 'none';
        // clear recovery field
        const r = recWrap.querySelector('input[name="recovery_code"]');
        if (r) r.value = '';
        if (digits[0]) digits[0].focus();
    });

    useRecBtn.addEventListener('click', () => {
        authWrap.style.display = 'none';
        recWrap.style.display = '';
        // clear code
        digits.forEach(d => d.value = '');
        syncHidden();
        const r = recWrap.querySelector('input[name="recovery_code"]');
        if (r) r.focus();
    });
});
</script>
@endsection
