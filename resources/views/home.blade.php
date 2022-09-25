@extends('layouts.app')

@section('content')
    @can('staff')
    @include('staff-dashboard');
    @endcan

    @can('admin')
        @include('admin-dashboard');
    @endcan
@endsection
