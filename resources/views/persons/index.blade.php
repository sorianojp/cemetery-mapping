@extends('layouts.app')

@section('content')
<div class="container my-5">
<h1 class="text-center font-weight-bold">MAP LEGEND</h1>
<img src="{{ asset('images/wholemap.jpg') }}" class="img-fluid img-thumbnail">
</div>
   <div class="container-fluid my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div class="row">
                @foreach ($lots as $lot)
                <div class="col-sm-4 my-2">
                    <h3 class="font-weight-bold text-center">{{ $lot->name }}</h3>
                    <div class="p-4 rounded-lg bg-secondary">
                    <p class="font-weight-light text-center text-white">Sectors</p>
                        <div class="row">
                            @foreach ($lot->sectors as $sector)
                            <div class="col-sm-6">
                                
                                    <a href="{{ route('sectors.graves', $sector) }}" class="btn btn-sm btn-primary">{{ $sector->name }}</a>
                                
                                <div class="p-2 bg-success rounded-lg my-1">
                                    <p class="font-weight-light text-center text-white">Graves</p>
                                    @foreach ($sector->graves as $grave)
                                        @if($grave->person)
                                        <a href="{{ route('persons.show', ['person' => $grave->person, 'grave_number' => $loop->iteration]) }}" class="btn btn-sm btn-primary mx-1 my-1" data-toggle="tooltip" data-placement="top" title="{{ $grave->person->full_name }}">
                                                {{ $loop->iteration }}
                                        </a>


                                        @else
                                            <a href="{{ route('persons.create', $grave) }}" class="btn btn-sm btn-dark mx-1 my-1">
                                                {{ $loop->iteration }}
                                                <!-- {{ $grave->id }} -->
                                            </a>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection
