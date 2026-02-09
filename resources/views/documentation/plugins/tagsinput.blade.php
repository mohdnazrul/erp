@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>Tagsinput</h5>
            <p class="fs-6">Bootstrap Tags Input is a jQuery plugin providing a Twitter Bootstrap user interface for managing tags. For more info, please visit the <a href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">plugin's site</a></p>
        </div>
        <div class="col-12">
            <input type="text" class="form-control" data-role="tagsinput" value="LUNO,Admin,React,VueJs,Angular" id="tagsinput">
        </div>
    </div> <!-- .row end -->


@endsection
@push('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput@0.7.1/dist/bootstrap-tagsinput.min.js"></script>
@endpush
