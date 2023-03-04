@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<header>
  <img src="{{ asset('images/contactheader.jpg') }}" class="img-fluid" >
</header>

<!-- Page section example for content below the video header -->
<section class="my-5 p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
      <img src="{{ asset('images/location.jpg') }}" class="d-block w-100 img-thumbnail">
      </div>
      <div class="col-md-4">
        <div class="row">
            <div class="col-sm-12">
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
