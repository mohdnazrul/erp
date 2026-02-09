@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>Sweetalert</h5>
            <p class="fs-6">A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies. For more info, please visit the <a href="https://sweetalert2.github.io/" target="_blank">plugin's site</a>. Sweetalert 2 use class with .btn <code>.sa-basic</code>, <code>.sa-title-text</code>, <code>.sa-title-error</code>, <code>.sa-buttons</code>, <code>.sa-position</code>, <code>.sa-image</code></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A basic message</h5>
                    <button class="btn btn-primary rounded-pill sa-basic">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A title with a text under</h5>
                    <button class="btn btn-primary rounded-pill sa-title-text">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A dialog with three buttons</h5>
                    <button class="btn btn-primary rounded-pill sa-buttons">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A custom positioned dialog</h5>
                    <button class="btn btn-primary rounded-pill sa-position">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A message with a custom image</h5>
                    <button class="btn btn-primary rounded-pill sa-image">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A message with auto close timer</h5>
                    <button class="btn btn-primary rounded-pill sa-autoclose">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>AJAX request example</h5>
                    <button class="btn btn-primary rounded-pill sa-ajax">Click Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card rounded-4">
                <div class="card-body p-lg-4 p-3">
                    <h5>A modal with a title, an error icon, a text, and a footer</h5>
                    <button class="btn btn-primary rounded-pill sa-title-error">Click Me</button>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->


@endsection
@push('scripts')
   <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.all.min.js"></script>

    <!--  -->
    <!-- <script src="assets/js/common.js"></script> -->
    <script>
        document.querySelector(".sa-basic").addEventListener('click', function() {
          Swal.fire("Our First Alert");
        });
        document.querySelector(".sa-title-text").addEventListener('click', function() {
          Swal.fire('The Internet?', 'That thing is still around?', 'question')
        });
        document.querySelector(".sa-title-error").addEventListener('click', function() {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
          })
        });
        document.querySelector(".sa-buttons").addEventListener('click', function() {
          Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
              Swal.fire('Changes are not saved', '', 'info')
            }
          })
        });
        document.querySelector(".sa-position").addEventListener('click', function() {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })
        });
        document.querySelector(".sa-image").addEventListener('click', function() {
          Swal.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: 'assets/images/gallery/01.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
          })
        });
        document.querySelector(".sa-autoclose").addEventListener('click', function() {
          let timerInterval
          Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
            }
          })
        });
        document.querySelector(".sa-ajax").addEventListener('click', function() {
          Swal.fire({
            title: 'Submit your Github username',
            input: 'text',
            inputAttributes: {
              autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Look up',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
              return fetch(`//api.github.com/users/${login}`).then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              }).catch(error => {
                Swal.showValidationMessage(`Request failed: ${error}`)
              })
            },
            allowOutsideClick: () => !Swal.isLoading()
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: `${result.value.login}'s avatar`,
                imageUrl: result.value.avatar_url
              })
            }
          })
        });
    </script>

@endpush
