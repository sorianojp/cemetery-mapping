@extends('layouts.app')

@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <a class="btn btn-primary my-2" href="{{ route('sectors.create') }}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Sector Name</th>
                <th>Lot Name</th>
                <th>Graves</th>
                <th>Action</th>

            </tr>
            @foreach ($sectors as $sector)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sector->name }}</td>
                <td>{{ $sector->lot->name }}</td>
                <td>{{ $sector->graves->count()}}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('sectors.graves.index', $sector) }}">Show Graves</a>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $sectors->links() !!}
    </div>

@endsection
