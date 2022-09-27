@extends('layouts.app')

@section('content')

   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <h1>Grave {{ $person->grave_id }}</h1>
        <h2>Full Name: {{ $person->full_name }}</h2>
        <h3>Born: {{ $person->born }}</h3>
        <h3>Died: {{ $person->died }}</h3>

        <a class="btn btn-secondary my-2" href="{{ route('persons.index') }}">Back</a>
    </div>

@endsection
