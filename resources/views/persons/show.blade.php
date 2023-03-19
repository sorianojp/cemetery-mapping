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
        <div>
            <a class="btn btn-secondary my-2" href="{{ route('persons.index') }}">Back</a>
            <a href="{{ route('persons.edit', $person) }}" class="btn btn-primary">Edit</a>
        </div>
        <div class="lapida">
            <img src="{{ asset('images/lapida.png') }}" alt="Snow" style="width:100%;">
            <div class="centered">
                <h1 class="font-weight-bold">{{ $person->full_name }}</h1>
                <h5 class="font-weight-bold">BORN: {{ \Carbon\Carbon::parse($person->born)->format('M-d-Y')}}</h5>
                <h5 class="font-weight-bold">DIED: {{ \Carbon\Carbon::parse($person->died)->format('M-d-Y')}}</h5>
                <h5 class="font-weight-bold">LOCATION: {{ $person->grave->sector->lot->name }} {{ $person->grave->sector->name }} GRAVE NO {{ $person->grave->id }}</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Relatives</h2>
                <ul>
                    @foreach($person->users as $relative)
                        <li>{{ $relative->full_name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
</div>
@endsection
@section('scripts')
@endsection