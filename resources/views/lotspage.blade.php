@extends('layouts.app')
@section('content')
<header>
  <img src="{{ asset('images/lotheader.jpg') }}" class="img-fluid w-full" >
</header>
<section class="my-5">
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card text-center h-100">
        <img class="card-img-top" src="{{ asset('images/lots/lawn.jpg') }}" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Lawn Lots
          </h4>
          <p class="card-text">May enter 2 bodies with not more than 2 sets of bone remains pervault.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card text-center h-100">
        <img class="card-img-top" src="{{ asset('images/lots/family.jpg') }}" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Family Estate
          </h4>
          <p class="card-text">The strenght of family bonds is eternal. Celebrate this extraordinary connection wiht a master planned family estate memorial. Make a dignified statement with a magnificient family estate memorial and leave an impressive legacy.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card text-center h-100">
        <img class="card-img-top" src="{{ asset('images/lots/garden.jpg') }}" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Garden Lots
          </h4>
          <p class="card-text">Our Well maintained garden lots represents purity and peace that allow a quiet reflection and meditation with your love one.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
</section>
@endsection
