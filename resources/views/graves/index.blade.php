@extends('layouts.app')

@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <a class="btn btn-primary my-2" href="{{ route('sectors.graves.create', $sector) }}">Add</a>
        <div>

            @foreach ($sector->graves as $grave)
                @if($grave->person)
                <button class="btn btn-sm my-1 mx-1 btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $grave->person->full_name }}">{{ $loop->iteration }}</button>
                @else
                <button class="btn btn-sm my-1 mx-1 btn-secondary">{{ $loop->iteration }}</button>
                @endif
            @endforeach
        </div>
    </div>

@endsection
