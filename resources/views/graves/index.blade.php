@extends('layouts.app')

@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <a class="btn btn-success my-2" href="{{ route('sectors.graves.create', $sector) }}">Create</a>
        <div>

            @foreach ($sector->graves as $grave)
                <button class="btn btn-secondary">{{ $loop->iteration }}</button>
            @endforeach
        </div>
    </div>

@endsection
