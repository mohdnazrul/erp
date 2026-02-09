@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>Image Input</h5>
            <p>Image input is an exclusive plugin of Good that enables a simple, user-friendly and lightweight image input field. as per your requires useing the class <code>.xxl</code>, <code>.xl</code>, <code>.lg</code> and if you need rounded-circle use with <code>.rounded-circle</code></p>
        </div>
        <div class="col-lg-6">
            <div class="image-input avatar position-relative d-inline-block xxl rounded-4" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-4" style="background-image: url(assets/images/profile.png)"></div>
                <div class="file-input position-absolute end-0 bottom-0 me-2 mb-2">
                    <input type="file" class="form-control" name="file-input" id="file-input1">
                    <label for="file-input1" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
            <div class="image-input avatar position-relative d-inline-block xl rounded-4" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-4"></div>
                <div class="file-input position-absolute end-0 bottom-0">
                    <input type="file" class="form-control" name="file-input" id="file-input2">
                    <label for="file-input2" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
            <div class="image-input avatar position-relative d-inline-block lg rounded-4" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-4"></div>
                <div class="file-input position-absolute">
                    <input type="file" class="form-control" name="file-input" id="file-input3">
                    <label for="file-input3" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="image-input avatar position-relative d-inline-block xxl rounded-circle" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-circle" style="background-image: url(assets/images/profile.png)"></div>
                <div class="file-input position-absolute end-0 bottom-0 me-2 mb-2">
                    <input type="file" class="form-control" name="file-input" id="file-input4">
                    <label for="file-input4" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
            <div class="image-input avatar position-relative d-inline-block xl rounded-circle" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-circle"></div>
                <div class="file-input position-absolute end-0 bottom-0">
                    <input type="file" class="form-control" name="file-input" id="file-input5">
                    <label for="file-input5" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
            <div class="image-input avatar position-relative d-inline-block lg rounded-circle" style="background-image: url(assets/images/profile.png)">
                <div class="avatar-wrapper rounded-circle"></div>
                <div class="file-input position-absolute">
                    <input type="file" class="form-control" name="file-input" id="file-input6">
                    <label for="file-input6" class="bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></label>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->


@endsection
@push('scripts')

@endpush
