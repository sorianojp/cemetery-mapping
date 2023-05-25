@extends('layouts.app')
@section('styles')
<style>
.lapida {
  position: relative;
  text-align: center;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
@endsection
@section('content')
<div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <!-- <div>
            <a class="btn btn-secondary my-2" href="{{ route('persons.index') }}">Back</a>
        </div> -->
        <div class="row">
            <!-- <div class="col-sm-6">
                @if($person->grave->sector->name == 'EMERALD')
                    <img src="{{ asset('images/phase1/EMERALD.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'RUBY')
                <img src="{{ asset('images/phase1/RUBY.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'GARNET')
                <img src="{{ asset('images/phase1/GARNET.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'AMETHYST')
                <img src="{{ asset('images/phase1/AMETHYST.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'DIAMOND 1')
                <img src="{{ asset('images/phase1/DIAMOND 1.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'DIAMOND 2')
                <img src="{{ asset('images/phase1/DIAMOND 2.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'PEARL')
                <img src="{{ asset('images/phase1/PEARL.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'OPAL')
                <img src="{{ asset('images/phase1/OPAL.jpg') }}" class="img-fluid">


                @elseif($person->grave->sector->name == 'CITRINE')
                <img src="{{ asset('images/phase2/CITRINE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'SAPPHIRE')
                <img src="{{ asset('images/phase2/SAPPHIRE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'PERIDOT')
                <img src="{{ asset('images/phase2/PERIDOT.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'TOPAZ')
                <img src="{{ asset('images/phase2/TOPAZ.jpg') }}" class="img-fluid">



                @elseif($person->grave->sector->name == 'ZIRCON')
                <img src="{{ asset('images/phase3/ZIRCON.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'ONYX')
                <img src="{{ asset('images/phase3/ONYX.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'ALEXANDRITE')
                <img src="{{ asset('images/phase3/ALEXANDRITE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'SARDONYX')
                <img src="{{ asset('images/phase3/SARDONYX.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'AQUAMARINE')
                <img src="{{ asset('images/phase3/AQUAMARINE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'TURQUOISE')
                <img src="{{ asset('images/phase3/TURQUOISE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'TOURMALINE')
                <img src="{{ asset('images/phase3/TOURMALINE.jpg') }}" class="img-fluid">
                @elseif($person->grave->sector->name == 'MOONSTONE')
                <img src="{{ asset('images/phase3/MOONSTONE.jpg') }}" class="img-fluid">

                @else
                    <p>Location Image Not Set!</p>
                @endif
            </div> -->
            <div class="col-sm-8">
            <a href="{{ route('persons.edit', $person) }}" class="btn btn-primary my-2">Add Deceased</a>
                <div class="lapida">
                    <img src="{{ asset('images/lapida.png') }}" alt="Snow" style="width:100%;">
                    <div class="centered">
                        <p class="font-weight-bold">{{ $person->full_name }}</p>
                        <p>BORN: {{ \Carbon\Carbon::parse($person->born)->format('M-d-Y')}}</p>
                        <p>DIED: {{ \Carbon\Carbon::parse($person->died)->format('M-d-Y')}}</p>
                        <p>LOCATION: <br>{{ $person->grave->sector->lot->name }}, {{ $person->grave->sector->name }}, GRAVE NO {{ $grave_number }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="{{ route('persons.owner', $person) }}" class="btn btn-primary my-2">Update</a>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Owner: {{ $person->owner_lastname }}, {{ $person->owner_firstname }} {{ $person->owner_mi }}</p>
                            </div>
                            <div class="col-sm-12">
                                <p>Status: {{ $person->status }}</p>
                            </div>
                            <div class="col-sm-12">
                                <p>Payment: {{ $person->payment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- <div class="col-md-4">
                <h2>Relatives</h2>
                <ul>
                    @foreach($person->users as $relative)
                        <li>{{ $relative->full_name }}</li>
                    @endforeach
                </ul>
            </div> -->
            <!-- <div class="col-md-4">
                <h2>Status</h2>
                <p>{{ $person->status }}</p>
            </div>
            <div class="col-md-4">
                <h2>Payment</h2>
                <p>{{ $person->payment }}</p>
            </div> -->
        </div>
</div>
@endsection
@section('scripts')
@endsection