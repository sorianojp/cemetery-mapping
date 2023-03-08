@extends('layouts.app')
@can('admin')
@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered" id="deceased">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Born</th>
                    <th>Died</th>
                    <th>Lot</th>
                    <th>Sector</th>
                    <th>Grave</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($persons as $person)
                <tr>
                    <td>{{ $person->full_name }}</td>
                    <td>{{ $person->born }}</td>
                    <td>{{ $person->died }}</td>
                    <td>{{ $person->grave->sector->lot->name }}</td>
                    <td>{{ $person->grave->sector->name }}</td>
                    <td>{{ $person->grave->id }}</td>
                    <td> <a class="btn btn-sm btn-secondary" href="{{ route('deceaseds.show', $person->id) }}">Show</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
@endcan