@extends('layouts.app')

@section('content')

   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @foreach ($lots as $lot)
            <div class="p-5 border border-primary">

                <h1>{{ $lot->name }}</h1>
                @foreach ($lot->sectors as $sector)

                <div class="p-5 border border-success">
                    <h1>{{ $sector->name }}</h1>
                    @foreach ($sector->graves as $grave)
                        @if($grave->person)
                            <a href="{{ route('persons.show', $grave->person) }}" class="btn btn-primary">
                                {{ $loop->iteration }}
                            </a>
                        @else
                            <a href="{{ route('persons.create', $grave) }}" class="btn btn-secondary">
                                {{ $loop->iteration }}
                            </a>
                        @endif

                    @endforeach
                </div>

                @endforeach
            </div>
        @endforeach


    </div>

@endsection
