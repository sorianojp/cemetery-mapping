@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">{{ $sector->name }} Graves</h1>
        @foreach($graves as $grave)
            @if($grave->person)
                <a href="{{ route('persons.show', $grave->person) }}" class="p-5 btn btn-sm btn-primary mx-1 my-1" data-toggle="tooltip" data-placement="top" title="{{ $grave->person->full_name }}">
                    {{ $loop->iteration }}
                    <!-- {{ $grave->id }} -->
                </a>
            @else
                <a href="{{ route('persons.create', $grave) }}" class="p-5 btn btn-sm btn-dark mx-1 my-1">
                    {{ $loop->iteration }}
                    <!-- {{ $grave->id }} -->
                </a>
            @endif
        @endforeach
    </div>
@endsection
