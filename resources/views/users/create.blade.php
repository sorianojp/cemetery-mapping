@extends('layouts.app')


@section('content')

<div class="container my-5">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif



    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>LastName:</label>
                {!! Form::text('lastname', null, array('placeholder' => 'Lastname','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>FirstName:</label>
                {!! Form::text('firstname', null, array('placeholder' => 'Firstname','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>MI:</label>
                {!! Form::text('mi', null, array('placeholder' => 'MI','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Email:</label>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Password:</label>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Confirm Password:</label>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Role:</label>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection