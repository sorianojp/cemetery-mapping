@extends('layouts.app')
@section('styles')
    <style>
      header {
      position: relative;
      background-color: black;
      height: 75vh;
      min-height: 25rem;
      width: 100%;
      overflow: hidden;
      }

      header video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: 0;
      -ms-transform: translateX(-50%) translateY(-50%);
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
      }

      header .container {
      position: relative;
      z-index: 2;
      }

      header .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: black;
      opacity: 0.5;
      z-index: 1;
      }

      /* Media Query for devices withi coarse pointers and no hover functionality */

      /* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

      @media (pointer: coarse) and (hover: none) {
      header {
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% );
      }

      header video {
          display: none;
      }
      }
  </style>
@endsection
@section('content')
<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-4 font-weight-bold">GARDEN OF EDEN</h1>
        <p class="lead mb-0">Mapping and Information System</p>
      </div>
    </div>
  </div>
</header>

<!-- Page section example for content below the video header -->
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>Comfortable Amenities</h1>
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
      <div class="col-md-4">
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
