@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>Password Meter</h5>
            <form class="password-meter">
                <div class="mb-2 ">
                    <label class="form-label" for="passwordmeter">Password</label>
                    <input type="password" class="form-control form-control-lg" id="passwordmeter">
                </div>
                <div class="progress mb-1" style="height: 10px;">
                    <div class="progress-bar bg-primary-gradient" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="text-muted mb-3">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                <button type="submit" class="btn btn-primary">Password Strength</button>
            </form>
        </div>
    </div> <!-- .row end -->


@endsection
@push('scripts')

@endpush
