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
        <h1 class="display-3">FOREST LAKE <span class="display-4">San Carlos</span></h1>
        <p class="lead mb-0">"A Better Place"</p>
      </div>
    </div>
  </div>
</header>

<!-- Page section example for content below the video header -->
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>About Forest Lake Pangasinan – San Carlos</h1>
        <p>San Carlos, officially the City of San Carlos (Pangasinan: Siyudad na San Carlos; Ilocano: Siudad ti San Carlos; Tagalog: Lungsod ng San Carlos), is a 3rd class city in the province of Pangasinan, Philippines. According to the 2015 census, it has a population of 188,571 people.</p>
        <p>Forest Lake Memorial Park in San Carlos, Pangasinan provides the community with a venue to celebrate life while remembering the dearly departed. Our beautifully planned parks and open spaces improve the physical and psychological health of the people in the locations we are in. Our parks strengthen our communities and make our cities and neighborhoods more attractive places to live and work.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p>As we grow nationwide, more and more cities are enjoying the perks of having a Forest Lake Memorial park nearby.</p>
        <p>Visit us today and discover how you can own a Forest Lake lot.</p>
      </div>
      <div class="col-md-4">
            <div class="card">
            <div class="card-header bg-primary text-center">
                PARK INFORMATION
            </div>
            <div class="card-body">
                <div><span class="font-weight-bold">Area:</span> 8 Hectares</div>
                <div><span class="font-weight-bold">Launched:</span> August 2014</div>
                <div><span class="font-weight-bold">Sales Office:</span> 51 Jesli Bldg., Rizal Ave., San Carlos City, Pangasinan</div>
                <div><span class="font-weight-bold">Phone:</span> 0917-802-0852 / 0998-841-6327 / 0943-138-3340 / (075) 632-6616 / (075) 632-6315 / (075) 632-6615</div>
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
        <h5 class="modal-title" id="exampleModalLabel">Forest Lake San Carlos Vicinity Map</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1140.4625511665338!2d120.32913161700559!3d15.959105431674535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14ca4f5e13134314!2sForest%20Lake!5e0!3m2!1sen!2sph!4v1664084807888!5m2!1sen!2sph" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</div>
@endsection
