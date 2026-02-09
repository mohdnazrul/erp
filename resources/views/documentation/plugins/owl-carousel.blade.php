@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>Owl Carousel</h5>
            <p>Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider. <a class="link-primary" href="https://owlcarousel2.github.io/OwlCarousel2/" rel="nofollow">OwlCarousel</a></p>
        </div>
        <div class="col-12 mt-4">
            <h6>Basic Example</h6>
            <p class="small">Basic usage of Owl Carousel. I used <code>loop:true</code> and <code>margin:10</code>. The structure works with any kind of DOM element. In all of my examples i used <code>&lt;div class="item"&gt;...&lt;/div&gt;</code> but you could put any other element <code>div/span/a/img...</code></p>
            <div class="owl-carousel owl-theme mb-3" id="OwlBasic">
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span class="text-truncate">Users</span>
                        <h3>$15.48</h3>
                        <span class="text-muted">No data</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>New Users</span>
                        <h3>250</h3>
                        <span class="text-danger">11.63%</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Session Duration</span>
                        <h3>$18</h3>
                        <span class="text-success">1.03%</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Transactions</span>
                        <h3>218</h3>
                        <span class="text-success">2.23%</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Conversion Rate</span>
                        <h3>0</h3>
                        <span class="text-danger">6.44%</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Revenue</span>
                        <h3>$24,750</h3>
                        <span class="text-muted">No data</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Revenue</span>
                        <h3>$24,750</h3>
                        <span class="text-muted">No data</span>
                    </div>
                </div>
                <div class="item card rounded-4">
                    <div class="card-body p-lg-4 p-3">
                        <span>Revenue</span>
                        <h3>$24,750</h3>
                        <span class="text-muted">No data</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <h5>Autoplay Example</h5>
            <div class="owl-carousel owl-theme" id="OwlBasicAutoplay">
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/01.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/02.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/03.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/04.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/05.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/06.png" alt=""></div>
                <div class="item"><img class="img-fluid rounded-4 img-thumbnail" src="assets/images/gallery/07.png" alt=""></div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <h6>Auto Width Example</h6>
            <div class="owl-carousel owl-theme" id="OwlAutoWidth">
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:250px">
                    <h4>1</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-warning); width:100px">
                    <h4>2</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-orange); width:500px">
                    <h4>3</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:100px">
                    <h4>4</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-secondary); width:50px">
                    <h4>6</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:250px">
                    <h4>7</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-secondary); width:120px">
                    <h4>8</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:420px">
                    <h4>9</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:120px">
                    <h4>10</h4>
                </div>
                <div class="item p-3 text-light rounded-4" style="height: 100px; background-color: var(--bs-primary); width:300px">
                    <h4>11</h4>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

@endsection
@push('scripts')
    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script>
        // Basic Example
        $('#OwlBasic').owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 5
            }
          }
        })
        // Autoplay Example
        var owl = $('#OwlBasicAutoplay');
        owl.owlCarousel({
          items: 4,
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 1000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 5
            }
          }
        });
        // Auto Width Example
        $('#OwlAutoWidth').owlCarousel({
          margin: 10,
          loop: true,
          autoWidth: true,
          items: 4
        })
      </script>
@endpush
