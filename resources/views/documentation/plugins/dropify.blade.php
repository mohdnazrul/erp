@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
    <div class="row g-3">
        <div class="col-12">
            <h5>Dropify</h5>
            <h6>Override your input files with style. For full documentation please check the <a href="http://jeremyfagis.github.io/dropify/" target="_blank" class="fw-bold link-primary">plugin's site</a></h6>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">Default</p>
            <input type="file" class="dropify">
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">With event and default file <small class="text-danger">try to remove the image</small></p>
            <input type="file" id="dropify-event" data-default-file="assets/images/gallery/01.png">
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">Disabled file upload</p>
            <input type="file" class="dropify" disabled="disabled">
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">Limit file type <small class="text-danger">try to upload png or pdf only</small></p>
            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">Limit file size <small class="text-danger">try to upload file larger than 100 KB</small></p>
            <input type="file" class="dropify" data-max-file-size="100K">
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <p class="text-muted">Custom messages for default <small class="text-danger">replace, remove and error</small></p>
            <input type="file" class="dropify-fr">
        </div>
    </div> <!-- .row end -->


@endsection
@push('scripts')
 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>

    <script>
        $(function() {
          $('.dropify').dropify();
          var drEvent = $('#dropify-event').dropify();
          drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
          });
          drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
          });
          $('.dropify-fr').dropify({
            messages: {
              default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
              replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
              remove: 'Supprimer',
              error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
          });
        });
    </script>

@endpush
