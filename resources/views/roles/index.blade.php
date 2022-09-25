@extends('layouts.app')


@section('content')
<div class="container my-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a class="btn btn-success my-2" href="{{ route('roles.create') }}">Create</a>
    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('roles.show',$role->id) }}">Show</a>

                    <a class="btn btn-sm btn-secondary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
    
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
        
            </td>
        </tr>
        @endforeach
    </table>
    {!! $roles->render() !!}
</div>
@endsection