@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<header>
  <img src="{{ asset('images/aboutheader.jpg') }}" class="img-fluid" >
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2>Vision</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <h2>Mission</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <h2>Goals</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div><!-- /.col-lg-4 -->
    </div>
  </div>
</section>
<!-- Page section example for content below the video header -->
<section class="my-5 p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/carousel/1.jpg') }}" class="d-block w-100 img-thumbnail" alt="1">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/carousel/2.jpg') }}" class="d-block w-100 img-thumbnail" alt="2">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/carousel/3.jpg') }}" class="d-block w-100 img-thumbnail" alt="3">
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
            <div class="col-sm-12 my-3">
                <div class="card">
                  <div class="card-header bg-primary text-center text-white">
                      PARK INFORMATION
                  </div>
                  <div class="card-body">
                      <div><span class="font-weight-bold">Address:</span> San Miguel, Calasiao, Pangasinan</div>
                      <div><span class="font-weight-bold">E-mail:</span> gardenofedenmemorialpark@yahoomail.com</div>
                      <div><span class="font-weight-bold">Phone:</span> (075) 517-3677 / 0915-601-5053 / 0925-760-4046 / 0915-601-5088</div>
                      <div class="mt-2"><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#vicinity">VIEW VICINITY MAP</button></div>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 my-3">
              <h3>Comfortable Amenities</h3>
            <ul>
              <li>Spacious Chapel</li>
              <li>Clean Comfort Rooms</li>
              <li>24-Hour Security System with CCTV</li>
              <li>Spacious Concrete Road System</li>
              <li>Convenient Car Parking</li>
              <li>Well-Lighted Park</li>
              <li>Well-Manicured Green Grass Shaded by Tall Palm Trees</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Modal -->
<div class="modal fade" id="vicinity" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Garden of Eden Vicinity Map</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.2737136034966!2d120.35640967046812!3d16.016223091967987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339142c636f80649%3A0x5389a7b939239a2c!2sGarden%20Of%20Eden%20Memorial%20Park!5e0!3m2!1sen!2sph!4v1677669285046!5m2!1sen!2sph" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</div>
@endsection
