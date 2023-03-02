@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-sm-6">
            <h1>User Dashboard</h1>
        </div>
    </div>
    <div class="jumbotron">
        <h1>Welcome!  <span class="font-weight-bold">{{ Auth::user()->full_name }}</span></h1>
    </div>
</div>

@endsection
