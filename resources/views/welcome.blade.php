@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Welcome Section -->
<div class="welcome d-flex justify-content-center flex-column">
  <div class="container">
    <!-- Navigation -->
    
    <!-- / Navigation -->
  </div> <!-- .container -->

  <!-- Inner Wrapper -->
  <div class="inner-wrapper mt-auto mb-auto container">
    <div class="row">
      <div class="col-md-7">
          <h1 class="welcome-heading display-4 text-white">Car Types</h1>
          <p class="text-white">All you need to know about cars.</p>
          
      </div>
    </div>
  </div>
  <!-- / Inner Wrapper -->
</div>
<!-- / Welcome Section -->

<!-- Our Services Section -->

<!-- / Our Services Section -->

<!-- Our Blog Section -->
<div class="blog section section-invert py-4">
  <h3 class="section-title text-center m-5">Latest Posts</h3>

  <div class="container">
    <div class="py-4">
      <div class="row">
        <div class="card-deck">
        <div class="col-md-12 col-lg-4">
          <div class="card mb-4">
            <img class="card-img-top" src="images/common/card-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Sport Cars</h4>
              <p class="card-text">The best sport cars of all times.</p>
              <a class="btn btn-primary btn-pill" href="{{ route('sports-cars') }}">Find More &rarr;</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-4">
          <div class="card mb-4">
            <img class="card-img-top" src="images/common/card-2.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Luxury Cars</h4>
              <p class="card-text">Comport right at your expence</p>
              <a class="btn btn-primary btn-pill" href="#">Read More &rarr;</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-4">
          <div class="card mb-4">
            <img class="card-img-top" src="images/common/card-3.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Trucks</h4>
              <p class="card-text">For your bulky travels.</p>
              <a class="btn btn-primary btn-pill" href="#">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card mb-4">
            <img class="card-img-top" src="images/common/card-4.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Offroad Cars</h4>
              <p class="card-text">Out in the rough roads.</p>
              <a class="btn btn-primary btn-pill" href="#">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card mb-4">
            <img class="card-img-top" src="images/common/card-5.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Lorries</h4>
              <p class="card-text">Vessal for transportig goods.</p>
              <a class="btn btn-primary btn-pill" href="#">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="card mb-2">
            <img class="card-img-top" src="images/common/card-6.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Buses</h4>
              <p class="card-text">Your daily transport at your service.</p>
              <a class="btn btn-primary btn-pill" href="#">Read More &rarr;</a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Our Blog Section -->

<!-- Testimonials Section -->

<!-- / Testimonials Section -->

<!-- Contact Section -->
@endsection