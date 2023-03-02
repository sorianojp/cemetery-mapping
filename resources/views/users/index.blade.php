@extends('layouts.app')


@section('content')

<div class="container my-5">

  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <a class="btn btn-primary my-2" href="{{ route('users.create') }}">Create</a>
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Roles</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($data as $key => $user)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $user->full_name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->username }}</td>
          <td>
            @if(!empty($user->getRoleNames()))
              @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
              @endforeach
            @endif
          </td>
          <td>
            <a class="btn btn-sm btn-primary" href="{{ route('users.show',$user->id) }}">Show</a>
            <a class="btn btn-sm btn-secondary" href="{{ route('users.edit',$user->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
              {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
    </table>

</div>
{!! $data->render() !!}

@endsection
