@extends('layouts.app')
 
@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        
        <a class="btn btn-success my-2" href="{{ route('lots.create') }}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>

            </tr>
            @foreach ($lots as $lot)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $lot->name }}</td>
            </tr>
            @endforeach
        </table>
        {!! $lots->links() !!}
    </div>
      
@endsection