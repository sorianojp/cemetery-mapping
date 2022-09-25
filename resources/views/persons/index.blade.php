@extends('layouts.app')
 
@section('content')

   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        
        <a class="btn btn-success my-2" href="{{ route('persons.create') }}">Add</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Born</th>
                <th>Died</th>
                <th>Lot</th>
                <th>Sector</th>

            </tr>
            @foreach ($persons as $person)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $person->full_name }}</td>
                <td>{{ $person->born }}</td>
                <td>{{ $person->died }}</td>
                <td>{{ $person->sector->lot->name }}</td>
                <td>{{ $person->sector->name }}</td>
            </tr>
            @endforeach
        </table>
        {!! $persons->links() !!}
    </div>
      
@endsection