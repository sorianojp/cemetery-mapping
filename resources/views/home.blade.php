@extends('layouts.app')

@section('content')

    @can('user')
        @include('user-dashboard');
    @endcan

    @can('staff')
        @include('staff-dashboard');
    @endcan

    @can('admin')
        @include('admin-dashboard');
    @endcan
@endsection
